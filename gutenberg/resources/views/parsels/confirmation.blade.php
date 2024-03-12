<script>
    function deleteOpenConfirmationPopup(deleteId) {
        // Show the confirmation popup
        document.getElementById('confirmationPopup-' + deleteId).style.display = 'flex';
    }

    function deleteCloseConfirmationPopup(deleteId) {
        // Hide the confirmation popup
        document.getElementById('confirmationPopup-' + deleteId).style.display = 'none';
    }
</script>
