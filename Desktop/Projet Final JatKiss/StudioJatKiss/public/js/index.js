

   // Écoutez le clic sur "Prestations"
   const subCategories = prestations.querySelector('.sub-categories');
   const prestaLink = document.getElementById('prestaLink');

               prestaLink.addEventListener('click', (e) => {
                   // Empêcher le lien de naviguer
                   e.preventDefault();
   
                   // Si les sous-catégories sont cachées, les afficher, sinon les cacher
                   if (subCategories.style.display === 'none') {
                       subCategories.style.display = 'block';
                   } else {
                       subCategories.style.display = 'none';
                   }
               });

   const resaCategories = prestations.querySelector('.resaCategories');
   const resaLink = document.getElementById('resaLink')

               resaLink.addEventListener('click', (e) => {
                   // Empêcher le lien de naviguer
                   e.preventDefault();

                   // Si les sous-catégories sont cachées, les afficher, sinon les cacher
                   if (resaCategories.style.display === 'none') {
                       resaCategories.style.display = 'block';
                   } else {
                       resaCategories.style.display = 'none';
                   }
               });


               const months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre",
               "Novembre", "Décembre"];
           const days = ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"];
           const table = document.getElementById('calendar-table'); // Utilisez l'ID de la table
           const dayCells = table.querySelectorAll('td[id^="day"]');
           const prevButton = document.getElementById('prevButton');
           const nextButton = document.getElementById('nextButton');
   
           // Initialisez la date affichée à aujourd'hui
           let displayedDate = new Date();
   
           // Fonction pour mettre à jour les cellules de jours avec la date spécifiée
           function updateDayCells(date) {
               console.log('La fonction updateDayCells est appelée avec la date :', date);
               for (let i = 0; i < dayCells.length; i++) {
                   const dayCell = dayCells[i];
                   const currentDay = new Date(date);
                   currentDay.setDate(date.getDate() + i);
                   dayCell.textContent = days[(currentDay.getDay() + i) % 7] + ' ' + currentDay.getDate() + ' ' + months[
                       currentDay.getMonth()];
               }
   
               // Effectuez une requête AJAX pour obtenir les réservations pour la date actuellement affichée
               $.ajax({
                   url: "{{ route('getResa') }}",
                   method: 'GET',
                   data: {
                       date: date.toISOString().split('T')[0]
                   },
                   success: function(reservations) {
                       // Parcourez les réservations reçues du serveur
                       reservations.forEach(reservation => {
                           const [dayIndex, hour] = reservation.split('-');
                           const cell = table.querySelector(
                               `#day${dayIndex} + td:nth-child(${parseInt(hour) + 2})`);
   
                           // Vérifiez si la cellule est déjà réservée
                           if (!cell.classList.contains('reserved')) {
                               // Si la cellule n'est pas réservée, ajoutez la classe "reserved"
                               cell.classList.add('reserved');
                               cell.textContent = 'Réservé';
                           }
                       });
                   }
               });
           }
   
           // Écoutez le clic sur le bouton Précédent
           prevButton.addEventListener('click', () => {
               // Décrémentez la date affichée de 5 jours
               displayedDate.setDate(displayedDate.getDate() - 5);
               updateDayCells(displayedDate);
           });
   
           // Écoutez le clic sur le bouton Suivant
           nextButton.addEventListener('click', () => {
               // Incrémentez la date affichée de 5 jours
               displayedDate.setDate(displayedDate.getDate() + 5);
               updateDayCells(displayedDate);
           });
   
           // Appelez la fonction initiale pour afficher les jours actuels
           updateDayCells(displayedDate);