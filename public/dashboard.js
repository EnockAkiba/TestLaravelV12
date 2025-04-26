document.querySelector('.menu-toggle').addEventListener('click', () => {
  const sidebar = document.querySelector('.sidebar');
  const content = document.querySelector('.main');

  sidebar.classList.toggle('hidden'); // Masque ou affiche la barre latérale
  sidebar.classList.toggle('open'); // Nécessaire pour les petits écrans
  content.classList.toggle('expanded'); // Étend ou réduit le contenu principal
});