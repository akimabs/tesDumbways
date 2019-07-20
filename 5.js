let drawLine = (length) => {
	const char = '*';
	const bg = ' ';

	// buat gambar blank
	// biar gampang buat array kosong
	let image = new Array(length);
	for (var i = 0; i < image.length; i++) {
		image[i] = new Array(length);
	}

	// mencoba buat drawline
	for (let y = 0; y < length; y++) {
		for (let x = 0; x < length; x++) {
			image[y][x] = bg;
		}

		image[y][y] = char;
	}

	console.log(image);
};

drawLine(8);
