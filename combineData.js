document.addEventListener("DOMContentLoaded", function () {
    function fetchData(endpoint, callback) {
        fetch(endpoint)
            .then(response => response.json())
            .then(data => callback(data))
            .catch(error => console.error('Error fetching data:', error));
    }

    function populateCombinedTable(data) {
        const combinedTableBody = document.querySelector('#combinedTable tbody');
        combinedTableBody.innerHTML = "";

        data.forEach(entry => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${entry.parameter}</td>
                <td>${entry.value}</td>
                <td>${entry.timestamp}</td>
            `;
            combinedTableBody.appendChild(row);
        });
    }

    setInterval(function () {
        fetchData('combined_data.php', populateCombinedTable);
    }, 100);
});
