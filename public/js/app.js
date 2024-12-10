document.addEventListener("DOMContentLoaded", function () {
    const statusFilter = document.getElementById("statusFilter");
    const rows = document.querySelectorAll("#table tbody tr"); // All rows in the table body

    if (!statusFilter) {
        console.error("Status filter element not found!");
        return;
    }

    // Log rows to verify they're being selected
    console.log("Rows detected:", rows);

    // Add event listener to filter rows when status changes
    statusFilter.addEventListener("change", function () {
        const filterValue = this.value.toLowerCase(); // Get filter value

        rows.forEach((row, index) => {
            const statusCell = row.querySelector("td:nth-child(3) span"); // Adjust for Status column
            
            if (!statusCell) {
                console.warn(`Row ${index + 1} has no status cell!`);
                return;
            }

            const statusText = statusCell.textContent.toLowerCase(); // Status text
            console.log(`Row ${index + 1} status:`, statusText);

            // Show or hide the row based on filter value
            if (filterValue === "" || statusText.includes(filterValue)) {
                row.style.display = ""; // Show row
            } else {
                row.style.display = "none"; // Hide row
            }
        });
    });
});
