(() => {
  const header = document.getElementById('siteHeader');
  const toggle = document.getElementById('insuranceMenuToggle');
  const menu = document.getElementById('insuranceMobileMenu');
  const close = document.getElementById('insuranceMenuClose');
  const desktop = window.matchMedia('(min-width: 1200px)');
  const products = [...header.querySelectorAll('.kh-products')].map(root => {
    const button = root.querySelector('.kh-products-toggle');
    return { root, button, panel: document.getElementById(button.getAttribute('aria-controls')) };
  });
  const levels = [...menu.querySelectorAll('.kh-next-level')].map(button => ({
    button,
    panel: document.getElementById(button.getAttribute('aria-controls')),
    label: button.querySelector('span').textContent.trim()
  }));
  const setOpen = (item, open) => {
    item.panel.hidden = !open;
    item.button.setAttribute('aria-expanded', String(open));
    if (item.label) item.button.setAttribute('aria-label', `${item.label} ${open ? 'ปิด' : 'เปิด'}เมนูย่อย`);
  };
  const closeProducts = (restoreFocus = false) => {
    products.forEach(item => {
      if (item.panel.hidden) return;
      setOpen(item, false);
      if (restoreFocus) item.button.focus({ preventScroll: true });
    });
  };
  products.forEach(item => {
    setOpen(item, false);
    item.button.addEventListener('click', () => {
      const open = item.panel.hidden;
      closeProducts();
      setOpen(item, open);
    });
    item.root.addEventListener('focusout', () => requestAnimationFrame(() => {
      if (!item.root.contains(document.activeElement)) setOpen(item, false);
    }));
  });
  const closeLevels = (restoreFocus = false) => {
    const open = levels.find(item => !item.panel.hidden);
    levels.forEach(item => setOpen(item, false));
    if (restoreFocus && open) open.button.focus({ preventScroll: true });
    return Boolean(open);
  };
  levels.forEach(item => item.button.addEventListener('click', () => {
    const open = item.panel.hidden;
    closeLevels();
    setOpen(item, open);
  }));
  let restoreMenuFocus = true;
  const syncHeight = () => document.documentElement.style.setProperty('--insurance-header-height', `${header.getBoundingClientRect().height}px`);
  const syncScroll = () => header.classList.toggle('is-scrolled', window.scrollY > 8);
  const closeMenu = (restoreFocus = true) => {
    if (!menu.open) return;
    restoreMenuFocus = restoreFocus;
    menu.close();
    toggle.setAttribute('aria-expanded', 'false');
    document.body.classList.remove('kh-menu-open');
  };
  if (typeof menu.showModal === 'function') {
    header.dataset.menuReady = 'true';
    toggle.addEventListener('click', () => {
      if (desktop.matches) return;
      closeProducts();
      closeLevels();
      restoreMenuFocus = true;
      menu.showModal();
      document.body.classList.add('kh-menu-open');
      toggle.setAttribute('aria-expanded', 'true');
    });
    close.addEventListener('click', () => closeMenu());
    const escapeMenu = event => {
      event.preventDefault();
      event.stopPropagation();
      if (!closeLevels(true)) closeMenu();
    };
    menu.addEventListener('keydown', event => { if (event.key === 'Escape') escapeMenu(event); });
    menu.addEventListener('cancel', escapeMenu);
    menu.addEventListener('close', () => {
      toggle.setAttribute('aria-expanded', 'false');
      document.body.classList.remove('kh-menu-open');
      if (restoreMenuFocus && !desktop.matches) toggle.focus({ preventScroll: true });
    });
    menu.addEventListener('click', event => {
      if (event.target.closest('a[href]')) { closeMenu(false); return; }
      if (event.target !== menu) return;
      const bounds = menu.getBoundingClientRect();
      if (event.clientX < bounds.left || event.clientX > bounds.right || event.clientY < bounds.top || event.clientY > bounds.bottom) closeMenu();
    });
  }
  document.addEventListener('click', event => {
    products.forEach(item => { if (!item.root.contains(event.target)) setOpen(item, false); });
  });
  document.addEventListener('keydown', event => {
    if (event.key === 'Escape' && products.some(item => !item.panel.hidden)) {
      event.preventDefault();
      closeProducts(true);
    }
  });
  desktop.addEventListener('change', () => {
    const active = document.activeElement;
    if (desktop.matches && (menu.open || active === toggle)) {
      closeMenu(false);
      document.getElementById('siteLogo').focus({ preventScroll: true });
    } else if (!desktop.matches && products.some(item => item.root.contains(active))) {
      toggle.focus({ preventScroll: true });
    }
    closeProducts();
    closeLevels();
    syncHeight();
  });
  window.addEventListener('scroll', syncScroll, { passive: true });
  window.addEventListener('resize', syncHeight);
  window.addEventListener('pageshow', () => { closeMenu(false); closeProducts(); closeLevels(); syncHeight(); syncScroll(); });
  window.addEventListener('pagehide', () => closeMenu(false));
  if ('ResizeObserver' in window) new ResizeObserver(syncHeight).observe(header);
  if (document.fonts) document.fonts.ready.then(syncHeight);
  syncHeight();
  syncScroll();
})();
