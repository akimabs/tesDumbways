let betweenDays = (startDate, endDate) => {
	// agar tau kalau inputan berupa date
	startDate = new Date(startDate);
	endDate = new Date(endDate);

	// mencoba menampilkan selisih waktu dan dimasukan kedalam array
	let result = new Array();
	let date = new Date(startDate);
	while (date <= endDate) {
		result.push(new Date(date));
		date.setDate(date.getDate() + 1);
	}
	console.log(result);
	// return result;
};

betweenDays('2018-11-01', '2018-11-05');
