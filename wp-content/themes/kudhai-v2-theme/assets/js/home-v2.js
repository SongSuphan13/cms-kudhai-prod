(() => {
  const form = document.querySelector('.home-v2-content .compare-form');
  if (!form) return;
  const brand = form.querySelector('#brand');
  const model = form.querySelector('#model');
  const year = form.querySelector('#year');
  const result = document.getElementById('compare-result');
  const models = {
    Toyota: ['Corolla Cross', 'Yaris', 'Camry', 'Fortuner'],
    Honda: ['City', 'Civic', 'HR-V', 'CR-V'],
    Mazda: ['Mazda 2', 'CX-5'],
    Nissan: ['Almera', 'Navara'],
    Isuzu: ['D-Max', 'MU-X'],
    Mitsubishi: ['Xpander', 'Pajero Sport'],
    BYD: ['Atto 3', 'Dolphin', 'Seal']
  };
  const updateModels = () => {
    const previous = model.value;
    model.replaceChildren(new Option('เลือกรุ่นรถ', ''));
    model.options[0].disabled = true;
    const choices = models[brand.value] || [];
    choices.forEach(name => model.add(new Option(name, name)));
    model.value = choices.includes(previous) ? previous : '';
    model.disabled = !choices.length;
    result.hidden = true;
  };
  brand.addEventListener('change', updateModels);
  model.addEventListener('change', () => { result.hidden = true; });
  year.addEventListener('change', () => { result.hidden = true; });
  form.addEventListener('submit', event => {
    event.preventDefault();
    if (!form.reportValidity()) return;
    const destination = new URL(form.dataset.compareUrl, window.location.href);
    destination.searchParams.set('car_brand', brand.value);
    destination.searchParams.set('car_model', model.value);
    destination.searchParams.set('car_year', year.value);
    window.location.assign(destination.href);
  });
  window.addEventListener('pageshow', updateModels);
  updateModels();
})();
