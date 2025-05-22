<!-- Modal de confirmation personnalisé -->
 <div class="modal fade" id="confirmationModal" tabindex="-1" aria-hidden="true" role="dialog" aria-modal="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg" style="background-color: #e6ffed;">
      <div class="modal-body text-center p-5">
        <div class="mb-3">
          <!-- Icône de succès -->
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#28a745" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.93 10.588L4.7 8.354l-.708.708 2.939 2.94 5.657-5.657-.708-.708-4.95 4.95z"/>
          </svg>
        </div>
        <h5 class="text-success fw-bold">Message envoyé avec succès !</h5>
      </div>
    </div>
  </div>
</div>

<!-- Modal d'erreur personnalisé -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-hidden="true" role="dialog" aria-modal="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg" style="background-color: #ffe6e6;">
      <div class="modal-body text-center p-5">
        <div class="mb-3">
          <!-- Icône d'erreur -->
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#dc3545" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 0 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
          </svg>
        </div>
        <h5 class="text-danger fw-bold">Une erreur est survenue lors de l’envoi.</h5>
      </div>
    </div>
  </div>
</div>

<!-- Modal Missing Fields -->
<div class="modal fade" id="missingFieldsModal" tabindex="-1" aria-hidden="true" role="dialog" aria-modal="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg" style="background-color: #ffe6e6;">
      <div class="modal-body text-center p-5">
        <div class="mb-3">
          <!-- Icône erreur -->
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#dc3545" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 0 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
          </svg>
        </div>
        <h5 class="text-danger fw-bold">Champs obligatoires manquants. Veuillez compléter tous les champs requis.</h5>
      </div>
    </div>
  </div>
</div>

<!-- Modal Unauthorized -->
<div class="modal fade" id="unauthorizedModal" tabindex="-1" aria-hidden="true" role="dialog" aria-modal="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg" style="background-color: #fff3cd;">
      <div class="modal-body text-center p-5">
        <div class="mb-3">
          <!-- Icône d'avertissement -->
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#ffc107" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8 1.5L.5 14h15L8 1.5zM8 6v4h1V6H8zm0 5v1h1v-1H8z"/>
          </svg>
        </div>
        <h5 class="text-warning fw-bold">Méthode non autorisée. Veuillez soumettre le formulaire correctement.</h5>
      </div>
    </div>
  </div>
</div>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  window.addEventListener('DOMContentLoaded', function () {
    const params = new URLSearchParams(window.location.search);
    const success = params.get('success'); // <- tu ne l'avais pas mis !
    const reason = params.get('reason');

    if (success === '1') {
      const modalEl = document.getElementById('confirmationModal');
      const modal = new bootstrap.Modal(modalEl);
      modal.show();
      setTimeout(() => modal.hide(), 3000);

    } else if (success === '0' && reason === 'smtp_failed') {
      const modalEl = document.getElementById('errorModal');
      const modal = new bootstrap.Modal(modalEl);
      modal.show();
      setTimeout(() => modal.hide(), 3000);

    } else if (success === '0' && reason === 'unauthorized') {
      const modalEl = document.getElementById('unauthorizedModal');
      const modal = new bootstrap.Modal(modalEl);
      modal.show();
      setTimeout(() => modal.hide(), 3000);

    } else if (success === '0' && reason === 'missing_fields') {
      const modalEl = document.getElementById('missingFieldsModal');
      const modal = new bootstrap.Modal(modalEl);
      modal.show();
      setTimeout(() => modal.hide(), 3000);
  }

    if (success !== null) {
      history.replaceState(null, '', window.location.pathname);
    }
  });
  
</script>

<script>
document.querySelector("form").addEventListener("submit", function () {
    document.getElementById("submitBtn").disabled = true;
    document.getElementById("submitBtn").textContent = "Envoi...";
    document.getElementById("loader").style.display = "inline-block";
});
</script>

<style>
.loading-dots {
  display: inline-block;
  font-size: 80px;
  font-weight: bold;
  letter-spacing: 10px;
  color: #007bff;
}

.loading-dots::after {
  content: '.';
  animation: dots 1.2s steps(3, end) infinite;
}

@keyframes dots {
  0% { content: '.'; }
  33% { content: '..'; }
  66% { content: '...'; }
}
</style>
