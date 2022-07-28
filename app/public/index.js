document.addEventListener('DOMContentLoaded', function () {


    var htmlContent = "";
    var FebNumberOfDays = "";
    var counter = 1;


    dateNow = new Date();
    month = dateNow.getMonth();
    day = dateNow.getDate();
    year = dateNow.getFullYear();

    var nextMonth = month + 1;
    var prevMonth = month - 1;


    //Determing if February (28,or 29)
    if (month == 1) {
        if ((year % 100 != 0) && (year % 4 == 0) || (year % 400 == 0)) {
            FebNumberOfDays = 29;
        } else {
            FebNumberOfDays = 28;
        }
    }


    // names of months and week days.
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thrusday", "Friday", "Saturday"];
    var dayPerMonth = ["31", "" + FebNumberOfDays + "", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31"];


    // days in previous month and next one , and day of week.
    var nextDate = new Date(nextMonth + ' 1 ,' + year);
    var weekdays = 0;
    var numOfDays = dayPerMonth[month];


    // loop to build the calendar body.
    while (counter <= numOfDays) {

        // When to start new line.
        if (weekdays > 6) {
            weekdays = 0;
            htmlContent += "</tr><tr>";
        }


        if (counter == day) {
            htmlContent += ' <td><input class="btndate today" type="button" value='+ counter + '></td>';
        } else {
            htmlContent += '<td><input class="btndate" type="button" value=' + counter + '></td>';

        }

        weekdays++;
        counter++;
    }

    var calendarBody = "<table>";
    calendarBody += "<thead><tr> <th>Mon</th> <th>Tue</th>" +
        "<th>Wed</th> <th>Thu</th> <th>Fri</th> <th>Sat</th> <th>Sun</th></tr>";
    calendarBody += "<tr>";
    calendarBody += htmlContent;
    calendarBody += "</tr></table>";
    document.querySelector('.container').insertAdjacentHTML("beforeend", calendarBody);

}, false);

function prevM(){
        month = (month == 0)? 11 : month-1;
        year = (month == 0)? year-1:year;
        document.getElementsByClassName("titles").innerHTML=month+" "+year;
}

function nextM(){
    month = (month == 11)? 0 : month+1;
    year = (month == 11)? year+1:year;
    document.getElementsByClassName("titles").innerHTML=month+" "+year;
}
