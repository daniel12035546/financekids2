// File: /FinanceKids/FinanceKids/src/js/progress.js

document.addEventListener('DOMContentLoaded', function() {
    const progressContainer = document.getElementById('progress-container');
    const userId = getUserId(); // Function to get the current user's ID

    function loadUserProgress() {
        fetch(`/api/progress/${userId}`)
            .then(response => response.json())
            .then(data => {
                displayProgress(data);
            })
            .catch(error => console.error('Error fetching progress:', error));
    }

    function displayProgress(data) {
        progressContainer.innerHTML = ''; // Clear previous progress
        data.forEach(item => {
            const progressItem = document.createElement('div');
            progressItem.className = 'progress-item';
            progressItem.innerHTML = `
                <h3>${item.title}</h3>
                <p>Progreso: ${item.progress}%</p>
                <div class="progress-bar">
                    <div class="progress" style="width: ${item.progress}%;"></div>
                </div>
            `;
            progressContainer.appendChild(progressItem);
        });
    }

    function getUserId() {
        // Placeholder function to get user ID
        // In a real application, this would likely come from a session or token
        return 1; // Example user ID
    }

    loadUserProgress();
});