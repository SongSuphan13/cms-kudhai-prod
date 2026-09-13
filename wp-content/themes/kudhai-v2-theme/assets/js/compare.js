(() => {
  const form = document.getElementById('vehicle-compare');
  if (!form) return;
  const keys = ['brand', 'model', 'year', 'variant', 'plate', 'province'];
  const labels = ['ยี่ห้อรถ', 'รุ่นรถ', 'ปีรถ', 'รุ่นย่อย', 'ป้ายทะเบียนรถ', 'จังหวัดทะเบียนรถ'];
  const fields = keys.map(key => form.querySelector(`[data-field="${key}"]`));
  const steps = [...form.querySelectorAll('.compare-step')];
  const back = document.getElementById('compare-back');
  const next = document.getElementById('compare-next');
  const line = document.getElementById('compare-line');
  const error = document.getElementById('compare-error');
  const progress = form.querySelector('[role="progressbar"]');
  const summary = document.getElementById('compare-summary-rows');
  const suggestions = {
    Toyota: ['Corolla Cross', 'Yaris', 'Yaris Ativ', 'Camry', 'Fortuner', 'Hilux Revo'],
    Honda: ['City', 'Civic', 'HR-V', 'CR-V', 'Accord'],
    Isuzu: ['D-Max', 'MU-X'], Nissan: ['Almera', 'Navara', 'Kicks'],
    Mazda: ['Mazda 2', 'Mazda 3', 'CX-3', 'CX-5', 'CX-30'],
    Ford: ['Ranger', 'Everest'], Mitsubishi: ['Xpander', 'Pajero Sport', 'Triton'],
    MG: ['MG3', 'MG4', 'ZS', 'HS'], BYD: ['Atto 3', 'Dolphin', 'Seal'],
    Suzuki: ['Swift', 'Ertiga', 'Celerio']
  };
  let current = 0;
  let editing = false;
  const values = () => fields.map(field => field.value.trim());
  function updateModels() {
    const list = document.getElementById('compare-models');
    list.replaceChildren();
    const brand = Object.keys(suggestions).find(key => key.toLowerCase() === fields[0].value.trim().toLowerCase());
    (suggestions[brand] || []).forEach(value => list.append(new Option(value, value)));
  }
  function updateBrands() {
    const query = fields[0].value.trim().toLowerCase();
    form.querySelectorAll('[data-brand]').forEach(button => {
      const value = button.dataset.brand.toLowerCase();
      button.hidden = !!query && !value.includes(query);
      button.setAttribute('aria-pressed', String(query === value));
    });
  }
  const composeMessage = () => 'สวัสดีครับ/ค่ะ ต้องการเปรียบเทียบประกันรถยนต์\n\n' + values().map((value, index) => `${labels[index]}: ${value}`).join('\n') + '\n\nรบกวนช่วยแนะนำแผนที่เหมาะสมด้วยครับ/ค่ะ';
  function renderSummary() {
    document.getElementById('compare-message').value = composeMessage();
    document.getElementById('compare-copy-status').textContent = '';
    summary.replaceChildren();
    values().forEach((value, index) => {
      const row = document.createElement('div'); row.className = 'compare-summary-row';
      const label = document.createElement('dt'); label.textContent = labels[index];
      const answer = document.createElement('dd'); answer.textContent = value || 'ยังไม่ได้เลือก';
      const edit = document.createElement('button'); edit.type = 'button'; edit.textContent = 'แก้ไข';
      edit.setAttribute('aria-label', `แก้ไข${labels[index]}`);
      edit.addEventListener('click', () => { editing = index !== 5; show(index); fields[index].focus(); });
      row.append(label, answer, edit); summary.append(row);
    });
  }
  function show(index, focus = true) {
    current = index;
    steps.forEach((step, i) => { step.hidden = i !== index; fields[i].disabled = i !== index; });
    error.hidden = true;
    back.disabled = index === 0 && !editing;
    back.textContent = editing ? '← กลับหน้าสรุป' : '← ย้อนกลับ';
    next.hidden = index === 5; line.hidden = index !== 5;
    next.textContent = editing ? 'บันทึกและดูสรุป →' : 'ถัดไป →';
    document.getElementById('compare-line-note').hidden = index !== 5;
    document.getElementById('compare-progress-label').textContent = `คำถาม ${index + 1} จาก 6`;
    progress.setAttribute('aria-valuenow', String(index + 1));
    progress.setAttribute('aria-valuetext', `คำถาม ${index + 1} จาก 6`);
    [...progress.children].forEach((bar, i) => bar.classList.toggle('is-complete', i <= index));
    form.querySelectorAll('.compare-context').forEach(node => { node.textContent = values().slice(0, index).filter(Boolean).join(' · '); });
    updateModels();
    if (index === 5) renderSummary();
    if (focus) {
      steps[index].querySelector('h2').focus({ preventScroll: true });
      form.scrollIntoView({ behavior: 'auto', block: 'start' });
    }
  }
  function invalidIndex() { return fields.findIndex(field => !field.value.trim()); }
  function validate(index) {
    const field = fields[index];
    field.value = field.value.trim();
    if (!field.value) {
      error.textContent = `กรุณาระบุ${labels[index]}ก่อนดำเนินการต่อ`; error.hidden = false; field.focus(); return false;
    }
    return true;
  }
  fields.forEach((field, index) => field.addEventListener('input', () => {
    error.hidden = true;
    // Dependent answers must be re-entered after changing the vehicle.
    if (index === 0) { fields[1].value = ''; fields[3].value = ''; updateBrands(); updateModels(); }
    if (index === 1 || index === 2) fields[3].value = '';
    if (current === 5) renderSummary();
  }));
  form.querySelectorAll('[data-brand]').forEach(button => button.addEventListener('click', () => {
    if (fields[0].value !== button.dataset.brand) { fields[1].value = ''; fields[3].value = ''; }
    fields[0].value = button.dataset.brand; updateBrands(); error.hidden = true;
  }));
  document.getElementById('compare-other-brand').addEventListener('click', () => {
    fields[0].value = ''; fields[1].value = ''; fields[3].value = ''; updateBrands(); fields[0].focus();
  });
  document.getElementById('compare-unknown-variant').addEventListener('click', () => {
    fields[3].value = 'ไม่ทราบรุ่นย่อย กรุณาช่วยตรวจสอบ'; error.hidden = true;
  });
  back.addEventListener('click', () => {
    if (editing) { editing = false; show(5); } else if (current > 0) show(current - 1);
  });
  document.getElementById('compare-copy').addEventListener('click', async () => {
    const messageField = document.getElementById('compare-message');
    const status = document.getElementById('compare-copy-status');
    messageField.value = composeMessage();
    try {
      await navigator.clipboard.writeText(messageField.value);
      status.textContent = 'คัดลอกแล้ว เปิดแชต LINE @582iiruk แล้ววางข้อความและกดส่ง';
    } catch (error) {
      messageField.focus();
      messageField.select();
      messageField.setSelectionRange(0, messageField.value.length);
      status.textContent = 'กรุณาคัดลอกข้อความที่เลือก แล้วนำไปวางในแชต LINE @582iiruk';
    }
  });
  form.addEventListener('submit', event => {
    event.preventDefault();
    if (!validate(current)) return;
    if (current < 5) {
      if (editing) {
        const missing = invalidIndex();
        if (missing >= 0 && missing < 5) show(missing);
        else { editing = false; show(5); }
      } else show(current + 1);
      return;
    }
    const missing = invalidIndex();
    if (missing >= 0) { editing = true; show(missing); validate(missing); return; }
    const message = composeMessage();
    // LINE opens a composed message; the user confirms sending inside LINE.
    window.location.assign('https://line.me/R/oaMessage/%40582iiruk/?' + encodeURIComponent(message));
  });
  // Optional vehicle selection handed off by the homepage; no plate or personal data in URLs.
  const params = new URLSearchParams(window.location.search);
  fields.slice(0, 3).forEach((field, i) => {
    const value = (params.get('car_' + keys[i]) || '').slice(0, i === 1 ? 80 : 60);
    if (value) field.value = value;
  });
  updateBrands();
  show(0, false);
  form.hidden = false;
})();
