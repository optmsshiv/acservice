const tabs = document.querySelectorAll('.tab');
const tabPanels = document.querySelectorAll('.tab-content');

tabs.forEach((tab) => {
  tab.addEventListener('click', () => {
    tabs.forEach((button) => button.classList.remove('active'));
    tabPanels.forEach((panel) => panel.classList.remove('active'));

    tab.classList.add('active');
    document.getElementById(tab.dataset.target).classList.add('active');
  });
});