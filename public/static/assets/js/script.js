const ColumnLengthToBe = 7;
const ChangeText = (id, value) => {
	// alert(id + value);z
	const element = document.getElementById(id);
	element.innerText = value;
};
const ChangeBgColor = (id, id2, value) => {
	const element = document.getElementById(id);
	const element2 = document.getElementById(id2);
	element.style.backgroundColor = value;
	element2.style.backgroundColor = value;
};
function showPreview(event, id) {
	if (event.target.files.length > 0) {
		var src = URL.createObjectURL(event.target.files[0]);
		var preview = document.getElementById(id);
		preview.src = src;
		// preview.style.display = "block";
	}
}

const Start = () => {
	// Getting all input values
	const background_color = document.getElementById("color").value;
	const Header_Logo = document.getElementById("logo");
	if (Header_Logo.value === "") {
		alert("Please select header logo");
		return 0;
	}
	const Header_Logo_Url = URL.createObjectURL(Header_Logo.files[0]);
	const School_Name = document.getElementById("school_name_input").value;
	const header_l1_address = document.getElementById("header_l1_address").value;
	const header_l2_address = document.getElementById("header_l2_address").value;
	const session_year = document.getElementById("session_year").value;
	const Signature = document.getElementById("sign");
	if (Signature.value === "") {
		alert("Please select the signature");
		return 0;
	}
	const Signature_URL = URL.createObjectURL(Signature.files[0]);
	console.log(Signature_URL);
	const photos = document.getElementById("photos");
	if (photos.value === "") {
		alert("Please uppload Photos");
		return 0;
	}
	let PhotosArr = [];
	var i;
	for (i = 0; i < photos.files.length; i++) {
		let tempImgURL = URL.createObjectURL(photos.files[i]);
		PhotosArr.push(tempImgURL);
	}
};
