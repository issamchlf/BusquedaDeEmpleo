document.addEventListener("DOMContentLoaded", function () {
	const statusFilter = document.getElementById("statusFilter");
	const rows = document.querySelectorAll(".row");

	// إضافة حدث التصفية عند التغيير
	statusFilter.addEventListener("change", function () {
		const filterValue = this.value.toLowerCase(); // الحصول على قيمة التصفية

		rows.forEach(row => {
			const statusCell = row.querySelector(".status span").textContent.toLowerCase();
			
			// إذا كانت القيمة مُتطابقة أو إذا لم يتم تحديد أي خيار
			if (filterValue === "" || statusCell.includes(filterValue)) {
				row.style.display = "";
			} else {
				row.style.display = "none";
			}
		});
	});
});
