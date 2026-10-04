function greet_user(){
    const username = document.getElementById('displayusername').innerText.trim();
    const userID = document.getElementById('displayuserid').innerText.trim();
    const year_level = document.getElementById('displayyearlevel').innerText.trim();
    const age = document.getElementById('displayage').innerText.trim();
    const academic_year = document.getElementById('displayacadyear').innerText.trim();

    alert(`Hello ${username},
Your User ID is: ${userID}
Year Level: ${year_level}
Age: ${age}
Academic Year: ${academic_year}`);
   
}