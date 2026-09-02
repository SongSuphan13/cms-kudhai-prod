  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        e.target.classList.add('is-visible');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.15 });
  document.querySelectorAll('.reveal').forEach(el=>io.observe(el));

  // nav scroll state
  const navbar = document.getElementById('navbar');
  const onScroll = () => {
    if(window.scrollY > 24){ navbar.classList.add('scrolled'); }
    else{ navbar.classList.remove('scrolled'); }
  };
  window.addEventListener('scroll', onScroll);
  onScroll();

  // keep hero/section spacing in sync with the header's real rendered height
  // (top-bar can wrap to two lines on narrow screens, so this is measured, not guessed)
  const siteHeader = document.getElementById('siteHeader');
  const syncHeaderHeight = () => {
    document.documentElement.style.setProperty('--header-h', siteHeader.offsetHeight + 'px');
  };
  syncHeaderHeight();
  window.addEventListener('resize', syncHeaderHeight);
  window.addEventListener('load', syncHeaderHeight);
  if(document.fonts && document.fonts.ready){ document.fonts.ready.then(syncHeaderHeight); }

  // mobile menu toggle
  const navToggle = document.getElementById('navToggle');
  const navMobilePanel = document.getElementById('navMobilePanel');
  navToggle.addEventListener('click', () => {
    const isOpen = navMobilePanel.classList.toggle('open');
    navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  });
  navMobilePanel.querySelectorAll('a').forEach(a=>{
    a.addEventListener('click', ()=> {
      navMobilePanel.classList.remove('open');
      navToggle.setAttribute('aria-expanded','false');
    });
  });

  // quote form submit (no backend wired up — shows confirmation only)
  const quoteForm = document.getElementById('quoteForm');
  const formSuccess = document.getElementById('formSuccess');
  if (quoteForm) {
  quoteForm.addEventListener('submit', (e)=>{
    e.preventDefault();
    if(!quoteForm.checkValidity()){
      quoteForm.reportValidity();
      return;
    }
    formSuccess.classList.add('show');
    quoteForm.reset();
    formSuccess.scrollIntoView({ behavior:'smooth', block:'center' });
  });
  }

  // hero quick quote form — captures info, hands off to the full quote form below
  const heroQuoteForm = document.getElementById('heroQuoteForm');
  const heroQuoteSuccess = document.getElementById('heroQuoteSuccess');
  if (heroQuoteForm) {
  heroQuoteForm.addEventListener('submit', (e)=>{
    e.preventDefault();
    if(!heroQuoteForm.checkValidity()){
      heroQuoteForm.reportValidity();
      return;
    }
    document.getElementById('qName').value = document.getElementById('heroQName').value;
    document.getElementById('qPhone').value = document.getElementById('heroQPhone').value;
    document.getElementById('qMake').value = document.getElementById('heroQMake').value;
    document.getElementById('qModel').value = document.getElementById('heroQModel').value;
    document.getElementById('qSubmodel').value = document.getElementById('heroQSubmodel').value;
    document.getElementById('qYear').value = document.getElementById('heroQYear').value;
    document.getElementById('qProvince').value = document.getElementById('heroQProvince').value;
    heroQuoteSuccess.classList.add('show');
    heroQuoteForm.reset();
  });
  }

  // case assessment chatbot — branching decision tree for a more thorough assessment
  const chatBody = document.getElementById('chatBody');
  const chatOptions = document.getElementById('chatOptions');
  const chatProgressBar = document.getElementById('chatProgressBar');

  const assessTree = {
    q_type: {
      text: "อุบัติเหตุของคุณเกิดขึ้นแบบไหน?",
      category: "อุบัติเหตุ",
      field: "ลักษณะอุบัติเหตุ",
      type: 'choice',
      options: [
        { label: "ชนกับรถหรือมอเตอร์ไซค์คันอื่น", next: "q_collision_manner" },
        { label: "ชนกับคนเดินถนน", next: "q_pedestrian_zone" },
        { label: "ชนกับสิ่งของหรือทรัพย์สินสาธารณะ", next: "q_property_damage" },
        { label: "เสียหลักหรือคว่ำเอง (ไม่มีคู่กรณี)", next: "q_single_cause" },
        { label: "คู่กรณีชนแล้วหลบหนี (Hit and run)", next: "q_hitrun_evidence" }
      ]
    },
    q_collision_manner: {
      text: "ลักษณะการชนเป็นแบบไหน?",
      category: "อุบัติเหตุ",
      field: "ลักษณะการชน",
      type: 'choice',
      options: [
        { label: "ถูกชนท้าย (ขณะขับหรือจอดอยู่)", next: "q_multi_vehicle" },
        { label: "ชนท้ายคันหน้า", next: "q_multi_vehicle" },
        { label: "ชนประสานงา (หัวชนหัว)", next: "q_multi_vehicle" },
        { label: "ชนด้านข้างหรือเฉี่ยว", next: "q_multi_vehicle" },
        { label: "ถูกตัดหน้าหรือเปลี่ยนเลนกะทันหัน", next: "q_multi_vehicle" },
        { label: "ชนขณะเลี้ยวหรือกลับรถ", next: "q_multi_vehicle" },
        { label: "ไม่แน่ใจ จำรายละเอียดไม่ได้ชัดเจน", next: "q_multi_vehicle" }
      ]
    },
    q_single_cause: {
      text: "สาเหตุที่เสียหลักหรือคว่ำคืออะไร?",
      category: "อุบัติเหตุ",
      field: "สาเหตุที่เสียหลัก",
      type: 'choice',
      options: [
        { label: "หลับใน หรือเผลอไม่ทันระวัง", next: "q_location" },
        { label: "เบรกแตกหรือระบบเบรกขัดข้อง", next: "q_location" },
        { label: "ยางแตกหรือยางระเบิด", next: "q_location" },
        { label: "หลบสิ่งกีดขวางหรือหลบสัตว์", next: "q_location" },
        { label: "ถนนลื่นหรือสภาพถนนไม่ดี", next: "q_location" },
        { label: "อื่นๆ", next: "q_location" }
      ]
    },
    q_multi_vehicle: {
      text: "มีคู่กรณีทั้งหมดกี่คัน?",
      category: "อุบัติเหตุ",
      field: "จำนวนคู่กรณี",
      type: 'choice',
      options: [
        { label: "คู่กรณี 1 คัน", next: "q_location" },
        { label: "คู่กรณีตั้งแต่ 2 คันขึ้นไป (ชนต่อเนื่อง)", next: "q_location" }
      ]
    },
    q_hitrun_evidence: {
      text: "มีหลักฐานของคู่กรณีที่หลบหนีไปหรือไม่?",
      category: "อุบัติเหตุ",
      field: "หลักฐานฝ่ายที่หลบหนี",
      type: 'choice',
      options: [
        { label: "มีหลักฐาน เช่น เห็นทะเบียนหรือมีภาพจากกล้อง", next: "q_location" },
        { label: "ไม่มีหลักฐานใดๆ", next: "q_location" }
      ]
    },
    q_pedestrian_zone: {
      text: "จุดเกิดเหตุอยู่บนทางม้าลายหรือไม่?",
      category: "อุบัติเหตุ",
      field: "จุดเกิดเหตุ (คนเดินถนน)",
      type: 'choice',
      options: [
        { label: "อยู่บนทางม้าลาย", next: "q_location" },
        { label: "ไม่ได้อยู่บนทางม้าลาย", next: "q_location" },
        { label: "ไม่แน่ใจ", next: "q_location" }
      ]
    },
    q_property_damage: {
      text: "ทรัพย์สินที่เสียหายคืออะไร?",
      category: "อุบัติเหตุ",
      field: "ทรัพย์สินที่เสียหาย",
      type: 'choice',
      options: [
        { label: "เสาไฟฟ้าหรือป้ายจราจร", next: "q_location" },
        { label: "รั้วหรือกำแพงบ้าน", next: "q_location" },
        { label: "รถที่จอดอยู่", next: "q_location" },
        { label: "ทรัพย์สินอื่นๆ", next: "q_location" }
      ]
    },
    q_location: {
      text: "อุบัติเหตุเกิดขึ้นที่บริเวณไหน?",
      category: "อุบัติเหตุ",
      field: "สถานที่เกิดเหตุ",
      type: 'choice',
      options: [
        { label: "ถนนใหญ่ในเมือง", next: "q_witness" },
        { label: "ทางด่วนหรือทางหลวง", next: "q_witness" },
        { label: "ในซอยหรือหมู่บ้าน", next: "q_witness" },
        { label: "ลานจอดรถหรือปั๊มน้ำมัน", next: "q_witness" }
      ]
    },
    q_witness: {
      text: "มีพยานในที่เกิดเหตุหรือไม่?",
      category: "หลักฐาน",
      field: "พยาน",
      type: 'choice',
      options: [
        { label: "มีพยานในที่เกิดเหตุ", next: "q_dashcam" },
        { label: "ไม่มีพยาน", next: "q_dashcam" },
        { label: "ไม่แน่ใจ", next: "q_dashcam" }
      ]
    },
    q_dashcam: {
      text: "มีกล้องหน้ารถบันทึกเหตุการณ์ไว้หรือไม่?",
      category: "หลักฐาน",
      field: "กล้องหน้ารถ",
      type: 'choice',
      options: [
        { label: "มีกล้องหน้ารถของเราเอง", next: "q_cctv" },
        { label: "มีกล้องหน้ารถของคู่กรณี", next: "q_cctv" },
        { label: "ไม่มีกล้องหน้ารถเลย", next: "q_cctv" }
      ]
    },
    q_cctv: {
      text: "บริเวณที่เกิดเหตุมีกล้องวงจรปิด (CCTV) หรือไม่?",
      category: "หลักฐาน",
      field: "กล้องวงจรปิด",
      type: 'choice',
      options: [
        { label: "มีกล้องวงจรปิดบริเวณนั้น", next: "q_police" },
        { label: "ไม่มี หรือไม่แน่ใจ", next: "q_police" }
      ]
    },
    q_police: {
      text: "เจ้าหน้าที่ร้อยเวรชี้ผลผิดถูกแล้วหรือยัง?",
      category: "การชี้ผิดถูก",
      field: "สถานะการชี้ผิดถูก",
      type: 'choice',
      options: [
        { label: "ชี้ผลแล้ว", next: "q_police_result" },
        { label: "ยังไม่ได้ชี้ผล", next: "q_contact_channel" },
        { label: "ไม่มีเจ้าหน้าที่มาที่เกิดเหตุ", next: "q_settlement" }
      ]
    },
    q_police_result: {
      text: "ผลการชี้ผิดถูกเป็นอย่างไร?",
      category: "การชี้ผิดถูก",
      field: "ผลชี้ผิดถูก",
      type: 'choice',
      options: [
        { label: "คุณเป็นฝ่ายถูก", next: "q_claim_made" },
        { label: "คุณเป็นฝ่ายผิด", next: "q_settlement" },
        { label: "ผิดร่วมกันทั้งสองฝ่าย (ประมาทร่วม)", next: "q_settlement" }
      ]
    },
    q_claim_made: {
      text: "คุณได้เรียกร้องค่าสินไหมไปยังคู่กรณีหรือบริษัทประกันแล้วหรือยัง?",
      category: "การเรียกร้องสินไหม",
      field: "สถานะการเรียกร้อง",
      type: 'choice',
      options: [
        { label: "เรียกร้องไปแล้ว", next: "q_claim_items" },
        { label: "ยังไม่ได้เรียกร้อง", next: "q_settlement" }
      ]
    },
    q_claim_items: {
      text: "เรียกร้องค่าเสียหายในหัวข้อใดไปบ้าง?",
      category: "การเรียกร้องสินไหม",
      field: "หัวข้อที่เรียกร้อง",
      type: 'choice',
      options: [
        { label: "ค่าซ่อมรถ", next: "q_claim_response" },
        { label: "ค่ารักษาพยาบาล", next: "q_claim_response" },
        { label: "ค่าขาดประโยชน์จากการใช้รถ", next: "q_claim_response" },
        { label: "ค่าขาดรายได้ระหว่างซ่อม", next: "q_claim_response" },
        { label: "ค่าทำขวัญหรือค่าเสียหายทางจิตใจ", next: "q_claim_response" }
      ]
    },
    q_claim_response: {
      text: "ผลตอบรับจากการเรียกร้องเป็นอย่างไร?",
      category: "การเรียกร้องสินไหม",
      field: "ผลตอบรับการเรียกร้อง",
      type: 'choice',
      options: [
        { label: "ได้รับข้อเสนอน้อยกว่าที่เรียกร้องไป", next: "q_claim_more" },
        { label: "ได้รับข้อเสนอเท่ากับหรือมากกว่าที่เรียกร้องไป", next: "q_settlement" },
        { label: "ยังไม่ได้รับการตอบรับใดๆ", next: "q_settlement" }
      ]
    },
    q_claim_more: {
      text: "ต้องการเรียกร้องค่าเสียหายเพิ่มเติมหรือไม่?",
      category: "การเรียกร้องสินไหม",
      field: "ต้องการเรียกเพิ่ม",
      type: 'choice',
      options: [
        { label: "ต้องการเรียกร้องเพิ่ม", next: "q_claim_more_amount" },
        { label: "ไม่ต้องการเรียกร้องเพิ่ม", next: "q_settlement" }
      ]
    },
    q_claim_more_amount: {
      text: "ต้องการเรียกร้องเพิ่มอีกประมาณเท่าไหร่?",
      category: "การเรียกร้องสินไหม",
      field: "จำนวนที่ต้องการเพิ่ม",
      type: 'choice',
      options: [
        { label: "ไม่เกิน 5,000 บาท", next: "q_settlement" },
        { label: "5,000 - 20,000 บาท", next: "q_settlement" },
        { label: "20,000 - 50,000 บาท", next: "q_settlement" },
        { label: "มากกว่า 50,000 บาท", next: "q_settlement" }
      ]
    },
    q_settlement: {
      text: "มีการเซ็นบันทึกยอมความ หรือบันทึกประจำวันไว้แล้วหรือยัง?",
      category: "การชี้ผิดถูก",
      field: "สถานะบันทึกยอมความ",
      type: 'choice',
      options: [
        { label: "เซ็นบันทึกยอมความแล้ว", next: "q_counterparty" },
        { label: "ยังไม่ได้เซ็น", next: "q_counterparty" },
        { label: "คู่กรณีปฏิเสธไม่ยอมเซ็น", next: "q_counterparty" }
      ]
    },
    q_counterparty: {
      text: "คู่กรณียอมรับผิดหรือไม่?",
      category: "คู่กรณี",
      field: "คู่กรณียอมรับผิดหรือไม่",
      type: 'choice',
      options: [
        { label: "คู่กรณียอมรับผิด", next: "q_counterparty_insurance" },
        { label: "คู่กรณีไม่ยอมรับผิด", next: "q_counterparty_reason" },
        { label: "ติดต่อคู่กรณีไม่ได้", next: "q_prb" }
      ]
    },
    q_counterparty_reason: {
      text: "คู่กรณีอ้างเหตุผลอะไรที่ไม่ยอมรับผิด?",
      category: "คู่กรณี",
      field: "เหตุผลที่คู่กรณีปฏิเสธ",
      type: 'choice',
      options: [
        { label: "อ้างว่าคุณเป็นฝ่ายผิด", next: "q_counterparty_insurance" },
        { label: "อ้างว่าเป็นเหตุสุดวิสัย", next: "q_counterparty_insurance" },
        { label: "ไม่ให้เหตุผลใดๆ", next: "q_counterparty_insurance" }
      ]
    },
    q_counterparty_insurance: {
      text: "คู่กรณีมีประกันภัยหรือไม่?",
      category: "คู่กรณี",
      field: "ประกันของคู่กรณี",
      type: 'choice',
      options: [
        { label: "คู่กรณีมีประกัน", next: "q_prb" },
        { label: "คู่กรณีไม่มีประกัน", next: "q_prb" },
        { label: "ไม่ทราบ", next: "q_prb" }
      ]
    },
    q_prb: {
      text: "คุณมี พ.ร.บ. หรือไม่?",
      category: "พ.ร.บ. / ประกัน",
      field: "สถานะ พ.ร.บ.",
      type: 'choice',
      options: [
        { label: "มี และยังไม่หมดอายุ", next: "q_insurance" },
        { label: "มี แต่หมดอายุแล้ว", next: "q_prb_expired" },
        { label: "ไม่มี", next: "q_prb_followup" }
      ]
    },
    q_prb_expired: {
      text: "ทราบหรือไม่ว่าต้องต่ออายุ พ.ร.บ. ก่อนจึงจะเคลมได้?",
      category: "พ.ร.บ. / ประกัน",
      field: "ทราบเรื่อง พ.ร.บ. หมดอายุ",
      type: 'choice',
      options: [
        { label: "ทราบแล้วว่าต้องต่ออายุก่อน", next: "q_insurance" },
        { label: "ยังไม่ทราบ", next: "q_insurance" }
      ]
    },
    q_prb_followup: {
      text: "ทราบหรือไม่ว่าต้องทำ พ.ร.บ. เพิ่มเติมตามกฎหมาย?",
      category: "พ.ร.บ. / ประกัน",
      field: "ทราบเรื่องต้องทำ พ.ร.บ.",
      type: 'choice',
      options: [
        { label: "ทราบแล้วว่าต้องทำเพิ่มเติม", next: "q_insurance" },
        { label: "ยังไม่ทราบ", next: "q_insurance" }
      ]
    },
    q_insurance: {
      text: "คุณมีประกันภาคสมัครใจหรือไม่?",
      category: "พ.ร.บ. / ประกัน",
      field: "สถานะประกันภาคสมัครใจ",
      type: 'choice',
      options: [
        { label: "มีประกันภาคสมัครใจ", next: "q_insurance_type" },
        { label: "ไม่มี", next: "q_vehicle_type" },
        { label: "ไม่แน่ใจ", next: "q_vehicle_type" }
      ]
    },
    q_insurance_type: {
      text: "ประกันของคุณเป็นชั้นไหน?",
      category: "พ.ร.บ. / ประกัน",
      field: "ชั้นประกัน",
      type: 'choice',
      options: [
        { label: "ชั้น 1", next: "q_insurance_company" },
        { label: "ชั้น 2+", next: "q_insurance_company" },
        { label: "ชั้น 3+", next: "q_insurance_company" },
        { label: "ชั้น 3", next: "q_insurance_company" },
        { label: "ไม่แน่ใจว่าชั้นไหน", next: "q_vehicle_type" }
      ]
    },
    q_insurance_company: {
      text: "บริษัทประกันของคุณคือบริษัทใด?",
      category: "พ.ร.บ. / ประกัน",
      field: "บริษัทประกัน",
      type: 'text',
      next: "q_vehicle_type"
    },
    q_vehicle_type: {
      text: "รถของคุณเป็นรถประเภทไหน?",
      category: "ตัวรถ / ความเสียหาย",
      field: "ประเภทรถ",
      type: 'choice',
      options: [
        { label: "มอเตอร์ไซค์", next: "q_damage_severity" },
        { label: "รถเก๋ง", next: "q_damage_severity" },
        { label: "กระบะหรือ SUV", next: "q_damage_severity" },
        { label: "รถใหญ่หรือรถบรรทุก", next: "q_damage_severity" }
      ]
    },
    q_damage_severity: {
      text: "ความเสียหายของรถคุณอยู่ในระดับใด?",
      category: "ตัวรถ / ความเสียหาย",
      field: "ระดับความเสียหาย",
      type: 'choice',
      options: [
        { label: "เสียหายเล็กน้อย (รอยขีดข่วนหรือบุบ)", next: "q_drivable" },
        { label: "เสียหายปานกลาง (ต้องเปลี่ยนอะไหล่)", next: "q_drivable" },
        { label: "เสียหายหนัก (พังยับหรือซ่อมไม่คุ้ม)", next: "q_drivable" }
      ]
    },
    q_drivable: {
      text: "หลังเกิดเหตุ รถยังขับเคลื่อนได้อยู่หรือไม่?",
      category: "ตัวรถ / ความเสียหาย",
      field: "สภาพรถขับเคลื่อนได้หรือไม่",
      type: 'choice',
      options: [
        { label: "ยังขับได้", next: "q_repair_quote" },
        { label: "ขับไม่ได้ ต้องใช้รถยก", next: "q_repair_quote" }
      ]
    },
    q_repair_quote: {
      text: "มีการประเมินราคาซ่อมแล้วหรือยัง?",
      category: "ตัวรถ / ความเสียหาย",
      field: "สถานะประเมินราคาซ่อม",
      type: 'choice',
      options: [
        { label: "ประเมินราคาซ่อมแล้ว", next: "q_repair_quote_fair" },
        { label: "ยังไม่ได้ประเมิน", next: "q_injury" }
      ]
    },
    q_repair_quote_fair: {
      text: "ราคาที่บริษัทประกันเสนอมา คุณคิดว่าเหมาะสมหรือไม่?",
      category: "ตัวรถ / ความเสียหาย",
      field: "ความเห็นต่อราคาซ่อมที่เสนอ",
      type: 'choice',
      options: [
        { label: "คิดว่าราคาที่เสนอมาเหมาะสม", next: "q_injury" },
        { label: "คิดว่าราคาต่ำเกินไป", next: "q_injury" },
        { label: "ยังไม่ได้รับข้อเสนอ", next: "q_injury" }
      ]
    },
    q_injury: {
      text: "มีผู้ได้รับบาดเจ็บจากอุบัติเหตุนี้หรือไม่?",
      category: "การบาดเจ็บ",
      field: "มีผู้บาดเจ็บหรือไม่",
      type: 'choice',
      options: [
        { label: "ไม่มีผู้บาดเจ็บ", next: "q_contact_channel" },
        { label: "บาดเจ็บเล็กน้อย", next: "q_injury_who" },
        { label: "บาดเจ็บสาหัส", next: "q_injury_who" },
        { label: "มีผู้เสียชีวิต", next: "q_injury_who" }
      ]
    },
    q_injury_who: {
      text: "ผู้ที่ได้รับบาดเจ็บคือใคร?",
      category: "การบาดเจ็บ",
      field: "ผู้บาดเจ็บ",
      type: 'choice',
      options: [
        { label: "ตัวคุณเอง", next: "q_treatment" },
        { label: "คู่กรณี", next: "q_treatment" },
        { label: "บุคคลที่สาม เช่น ผู้โดยสารหรือคนเดินถนน", next: "q_treatment" },
        { label: "บาดเจ็บหลายฝ่าย", next: "q_treatment" }
      ]
    },
    q_treatment: {
      text: "ผู้บาดเจ็บเข้ารับการรักษาโดยใช้สิทธิ์ใด?",
      category: "การบาดเจ็บ",
      field: "สิทธิ์การรักษา",
      type: 'choice',
      options: [
        { label: "ใช้สิทธิ์ พ.ร.บ. ที่โรงพยาบาลรัฐ", next: "q_contact_channel" },
        { label: "ใช้สิทธิ์ พ.ร.บ. ที่โรงพยาบาลเอกชน", next: "q_contact_channel" },
        { label: "สำรองจ่ายเองและรอเบิกคืน", next: "q_contact_channel" },
        { label: "ยังไม่ได้เข้ารับการรักษา", next: "q_contact_channel" }
      ]
    },
    q_contact_channel: {
      text: "ต้องการให้ทีมงานติดต่อกลับทางช่องทางไหน?",
      category: "ข้อมูลติดต่อกลับ",
      field: "ช่องทางติดต่อกลับที่ต้องการ",
      type: 'choice',
      options: [
        { label: "โทรศัพท์", next: "q_contact_name" },
        { label: "LINE", next: "q_contact_name" }
      ]
    },
    q_contact_name: {
      text: "ขอชื่อ-นามสกุลของคุณด้วยครับ",
      category: "ข้อมูลติดต่อกลับ",
      field: "ชื่อ-นามสกุล",
      type: 'text',
      next: "q_contact_phone"
    },
    q_contact_phone: {
      text: "ขอเบอร์โทรศัพท์ที่ติดต่อได้ด้วยครับ",
      category: "ข้อมูลติดต่อกลับ",
      field: "เบอร์โทรศัพท์",
      type: 'text',
      next: "end"
    }
  };

  const ASSESS_START = 'q_type';
  const ASSESS_ESTIMATED_STEPS = 15; // typical path length, used only to animate the progress bar

  let assessCurrentId = ASSESS_START;
  let assessStepCount = 0;
  let assessStarted = false;
  const assessAnswers = {}; // node_id -> chosen label / typed text

  function addMessage(text, sender){
    const el = document.createElement('div');
    el.className = 'msg ' + sender;
    el.textContent = text;
    chatBody.appendChild(el);
    chatBody.scrollTop = chatBody.scrollHeight;
    return el;
  }

  function showTyping(){
    const el = document.createElement('div');
    el.className = 'msg typing';
    el.innerHTML = '<span></span><span></span><span></span>';
    chatBody.appendChild(el);
    chatBody.scrollTop = chatBody.scrollHeight;
    return el;
  }

  function updateProgress(){
    const pct = Math.min(92, Math.round((assessStepCount / ASSESS_ESTIMATED_STEPS) * 100));
    chatProgressBar.style.width = pct + '%';
  }

  function renderChoiceOptions(options, onPick){
    chatOptions.innerHTML = '';
    options.forEach((opt) => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'chat-option-btn';
      btn.textContent = opt.label;
      btn.addEventListener('click', () => onPick(opt.label, opt.next));
      chatOptions.appendChild(btn);
    });
  }

  function renderTextInput(placeholder, onSubmit){
    chatOptions.innerHTML = '';
    const row = document.createElement('div');
    row.className = 'chat-text-row';
    const input = document.createElement('input');
    input.type = 'text';
    input.className = 'chat-text-input';
    input.placeholder = placeholder;
    const sendBtn = document.createElement('button');
    sendBtn.type = 'button';
    sendBtn.className = 'chat-text-send';
    sendBtn.textContent = 'ส่ง';
    const submit = () => {
      const val = input.value.trim();
      if(!val) { input.focus(); return; }
      onSubmit(val);
    };
    sendBtn.addEventListener('click', submit);
    input.addEventListener('keydown', (e) => { if(e.key === 'Enter'){ submit(); } });
    row.appendChild(input);
    row.appendChild(sendBtn);
    chatOptions.appendChild(row);
    input.focus();
  }

  function askQuestion(){
    if(assessCurrentId === 'end' || !assessTree[assessCurrentId]){
      finishAssessment();
      return;
    }
    updateProgress();
    const q = assessTree[assessCurrentId];
    const typingEl = showTyping();
    chatOptions.innerHTML = '';
    setTimeout(() => {
      typingEl.remove();
      addMessage(q.text, 'bot');

      const advance = (label, nextId) => {
        assessAnswers[assessCurrentId] = { field: q.field, category: q.category, value: label };
        addMessage(label, 'user');
        chatOptions.innerHTML = '';
        assessStepCount += 1;
        assessCurrentId = nextId;
        setTimeout(askQuestion, 450);
      };

      if(q.type === 'text'){
        renderTextInput('พิมพ์คำตอบแล้วกดส่ง', (val) => advance(val, q.next));
      } else {
        renderChoiceOptions(q.options, (label, nextId) => advance(label, nextId));
      }
    }, 550);
  }

  function buildSummaryHtml(){
    const groups = {};
    const order = [];
    Object.values(assessAnswers).forEach((a) => {
      if(!groups[a.category]){ groups[a.category] = []; order.push(a.category); }
      groups[a.category].push(a);
    });
    let html = '';
    order.forEach((cat) => {
      html += `<div class="chat-summary-group"><h5>${cat}</h5>`;
      groups[cat].forEach((a) => {
        html += `<div class="chat-summary-row"><span class="k">${a.field}</span><span class="v">${a.value}</span></div>`;
      });
      html += `</div>`;
    });
    return html;
  }

  function finishAssessment(){
    chatProgressBar.style.width = '100%';
    const typingEl = showTyping();
    setTimeout(() => {
      typingEl.remove();
      addMessage('ขอบคุณสำหรับข้อมูลครับ นี่คือสรุปเคสของคุณ ทีมงานจะเห็นข้อมูลนี้ทันทีโดยไม่ต้องถามซ้ำ', 'bot');

      const summary = document.createElement('div');
      summary.className = 'chat-summary';
      summary.innerHTML = buildSummaryHtml();
      chatBody.appendChild(summary);

      const result = document.createElement('div');
      result.className = 'chat-result';
      result.innerHTML = `
        <h4>ผลประเมินเบื้องต้น</h4>
        <p>ทีมงานจะวิเคราะห์จากข้อมูลด้านบน เลือกคลิปวิดีโอเคสที่ใกล้เคียงกับสถานการณ์ของคุณ และติดต่อกลับตามช่องทางที่แจ้งไว้ พร้อมคำแนะนำขั้นต่อไป</p>
        <div class="chat-result-actions">
          <a href="#" target="_blank" rel="noopener" class="btn btn-primary">รับคลิปเคสทาง LINE</a>
          <button type="button" class="chat-restart" id="chatRestartBtn">ประเมินใหม่</button>
        </div>
      `;
      chatBody.appendChild(result);
      chatBody.scrollTop = chatBody.scrollHeight;

      document.getElementById('chatRestartBtn').addEventListener('click', restartAssessment);
    }, 550);
  }

  function restartAssessment(){
    assessCurrentId = ASSESS_START;
    assessStepCount = 0;
    for(const k in assessAnswers){ delete assessAnswers[k]; }
    chatBody.innerHTML = '';
    chatOptions.innerHTML = '';
    chatProgressBar.style.width = '0%';
    askQuestion();
  }

  // modal open/close wiring
  const assessModalOverlay = document.getElementById('assessModalOverlay');
  const assessModalClose = document.getElementById('assessModalClose');
  const assessFloatBtn = document.getElementById('assessFloatBtn');

  function openAssessModal(){
    assessModalOverlay.classList.add('open');
    document.body.style.overflow = 'hidden';
    if(!assessStarted){
      assessStarted = true;
      askQuestion();
    }
  }

  function closeAssessModal(){
    assessModalOverlay.classList.remove('open');
    document.body.style.overflow = '';
  }

  assessFloatBtn.addEventListener('click', openAssessModal);
  assessModalClose.addEventListener('click', closeAssessModal);
  assessModalOverlay.addEventListener('click', (e) => {
    if(e.target === assessModalOverlay){ closeAssessModal(); }
  });
  document.addEventListener('keydown', (e) => {
    if(e.key === 'Escape' && assessModalOverlay.classList.contains('open')){ closeAssessModal(); }
  });
  document.querySelectorAll('.js-open-assess').forEach((el) => {
    el.addEventListener('click', (e) => {
      e.preventDefault();
      openAssessModal();
    });
  });

  // intro modal — "who we are / what is มูลละเมิด" — shown once per browser
  // session on the front page only
  const introModalOverlay = document.getElementById('introModalOverlay');
  if (introModalOverlay) {
    const introModalClose = document.getElementById('introModalClose');
    const introModalStart = document.getElementById('introModalStart');

    function openIntroModal(){
      introModalOverlay.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
    function closeIntroModal(){
      introModalOverlay.classList.remove('open');
      document.body.style.overflow = '';
      try { sessionStorage.setItem('kudhaiIntroSeen', '1'); } catch (err) {}
    }

    let introAlreadySeen = false;
    try { introAlreadySeen = sessionStorage.getItem('kudhaiIntroSeen') === '1'; } catch (err) {}

    if (!introAlreadySeen) {
      window.setTimeout(openIntroModal, 800);
    }

    introModalClose.addEventListener('click', closeIntroModal);
    introModalStart.addEventListener('click', closeIntroModal);
    introModalOverlay.addEventListener('click', (e) => {
      if (e.target === introModalOverlay) { closeIntroModal(); }
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && introModalOverlay.classList.contains('open')) { closeIntroModal(); }
    });
  }
