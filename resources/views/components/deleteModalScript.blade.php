<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteModal = document.getElementById('confirmDeleteModal');
        
        if (deleteModal) {
            deleteModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget; 
                
                const taskRoute = button.getAttribute('data-task-route');
                
                const form = deleteModal.querySelector('#deleteForm');
                

                if (form && taskRoute) {
                    form.setAttribute('action', taskRoute);
                }
            });
        }
    });
</script>