// cek validasi username
let cekUsername = (username) => {
	let validasi = /^([a-z].{0,8})$/;
	if (username.match(validasi)) {
		console.log('valid');
	} else {
		console.log('invalid');
	}
};

// cek validasi email
let cekEmail = (email) => {
	let validasi = /^([a-z].{1,})([.=@])([a-z].{1,})([.=.])([a-z].{1,})$/;
	if (email.match(validasi)) {
		console.log('valid');
	} else {
		console.log('invalid');
	}
};

cekUsername('Vladimir');
cekEmail('kukuruyuk@gmail.com');
