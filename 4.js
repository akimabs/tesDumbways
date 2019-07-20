let countHandhsake = (count) => {
	// jadikan string biar bisa dihitung
	let salaman = '';

	// mencoba menghitung salaman
	for (let i = 0; i < count; i++) {
		for (let j = 0; j < i; j++) {
			salaman += i;
		}
	}
	console.log('Jumlah Salaman: ' + salaman.length);
};

countHandhsake(6);
