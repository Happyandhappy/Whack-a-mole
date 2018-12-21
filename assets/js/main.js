
function clearUsers(){
	localStorage.removeItem('users');
}

function clearScores(){
	localStorage.removeItem('scores');
}

function clearAll(){
	clearScores();
	clearUsers();
}


function clearAlert(){
	$('#alert_success').addClass('hidden');
	$('#alert_danger').addClass('hidden');		
}
function showAlert(status, message){
	clearAlert();
	$('#alert_' + status).removeClass('hidden');
	$('#alert_' + status).html(message);
}

/* register new user to localStorage */
function registerAction(username, password){		
	/*get JSON of users data from localStorage*/
	usersJson = localStorage.getItem('users');	
	users = [];
	user = { username : username, password : password }

	if (usersJson === null){
		users.push(user);
	}else{
		users = JSON.parse(usersJson);
		/* check if username is alread existed */
		for (i = 0 ; i < users.length; i++){
			if (users[i].username === username){					
			    return {status : "danger", message : "Username is already existed."};
			}
		}
		users.push(user);
	}
	/* save new user as JSON format to localStorage */
	localStorage.setItem("users", JSON.stringify(users));
	return {status : "success", message : "Successfully registered"};
}

/* User login by username and password */
function loginAction(username, password){
	/* get users Json data from localStorage*/
	usersJson = localStorage.getItem('users');

	if (usersJson === null)
		return {status: 'danger' , message : "Users does not exist."}

	users = JSON.parse(usersJson);
	/* Check if user with username and password is existed or not */
	for (i = 0 ; i < users.length ; i++){
		if (username === users[i].username){
			if (password === users[i].password){
				/* successfully login */
				// currentUser = users[i].username;
				localStorage.setItem('currentUser', users[i].username)
				return {status : 'success', message : "Successfully logged in"}
			}else{
				return {status : 'danger', message : "Invalid Password"}
			}
		}
	}
	return {status : 'danger' , message : "Username does not exist"}
}

$('#login-submit').click(function(){			
	username = $('#lusername').val();
	password = $('#lpassword').val();
	if (username === '') {
		showAlert('danger','Username is required!');return;
	}else if (password === ''){
		showAlert('danger','Password is required!');return;
	}
	/* login and show message of validation */
	res = loginAction(username, password);
	showAlert(res.status, res.message);

	if (res.status === 'success'){
		setTimeout(()=>{
			window.location = "index.php";
		}, 1000);
	}
});

$('#register-submit').click(function(){
	username = $('#rusername').val();
	password = $('#rpassword').val();
	confirmpass = $('#rconfirm-password').val();
	
	if (username === ''){
		showAlert('danger', 'Username is required');return;
	}else if (password === ''){
		showAlert('danger', 'Password is required');return;
	}else if (confirmpass === '' || confirmpass != password){
		showAlert('danger', 'Confirm Password is not matched');return;
	}
	res = registerAction(username, password);
	showAlert(res.status, res.message);
	if (res.status === 'success'){
		setTimeout(()=>{
			window.location = 'login.php';
		}, 1000);
	}
});


/* Show Ranking results */
function showScores(){
	/* Get JSON of scores from localStorage */
	scoresJson = localStorage.getItem('scores');	
	if (scoresJson === null){
		$('#table1').html("Thers is not result");
		$('#table2').html("Thers is not result");
		return;
	}

	// json parse and get scores array
	scores = JSON.parse(scoresJson);
	scores1 = scores.scores1;
	scores2 = scores.scores2;
	/* Sort scores */
	scores1.sort(function(a, b){return b.score - a.score});
	scores2.sort(function(a, b){return b.score - a.score});

	tblBody = "";
	for (i = 0 ; i < scores1.length; i++){
		tblBody += "<tr>";
		tblBody += "<td>" + (i+1) + "</td>";
		tblBody += "<td>" + scores1[i].username + "</td>";
		tblBody += "<td>" + scores1[i].score + "</td>";
		tblBody += "</tr>";
	}
	$('#table1').html(tblBody==="" ? "Thers is not result" : tblBody);

	tblBody = "";
	for (i = 0 ; i < scores2.length; i++){
		tblBody += "<tr>";
		tblBody += "<td>" + (i+1) + "</td>";
		tblBody += "<td>" + scores2[i].username + "</td>";
		tblBody += "<td>" + scores2[i].score + "</td>";
		tblBody += "</tr>";
	}
	$('#table2').html(tblBody==="" ? "Thers is not result" : tblBody);
}

/* functions for navbar */
function isLoggedin(){		
	// localStorage.setItem('currentUser',"me");
	user = localStorage.getItem('currentUser')
	if (user === null){
		$('#notloggedin').removeClass('hidden');
		$('#loggedin').addClass('hidden');
	}else{
		$('#navUser').html("Signed in as <b>" + user + "</b>");
		$('#loggedin').addClass('hidden');
		$('#loggedin').removeClass('hidden');
	}
}

function logout(){
	localStorage.removeItem('currentUser');
	alert("Successfully logged out");
	document.location.reload();
}

function showUsers(){
	usersJson = localStorage.getItem('users');
	console.log(usersJson);
}

(function(){
	isLoggedin();
	showUsers();
})();