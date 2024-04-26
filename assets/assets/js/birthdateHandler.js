const getBirthdateHandler = () => {
    // Given input value
    let nikValue = document.getElementById("nik").value;
    let birthDate = document.getElementById("birthdate");

    // Convert the number to string
    const sixDigitNumber = nikValue.toString();

    // Extract the substring representing the 6-digit number
    let dateString = sixDigitNumber.substr(6, 6);

    // Convert the 6-digit number to a date
    const day = dateString.substr(0, 2);
    const month = dateString.substr(2, 2) - 1; // Month is 0-indexed in JavaScript Date object
    const year = dateString.substr(4, 4); // Assuming it represents year in YY format

    // Array of month names
    let monthNames = [
      "January", "February", "March", "April", "May", "June", "July",
      "August", "September", "October", "November", "December"
    ];

    // Format year to real year
    if (year <= "24" && year >= "00") {
        var formattedYear = "20" + year;
    } else {
        var formattedYear = "19" + year;
    }
    // Format the date as "day Month year"
    const formattedDate = `${day} ${monthNames[month]} ${formattedYear}`;
    birthDate.value = formattedDate;
}