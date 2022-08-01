dateNow = new Date();
month = dateNow.getMonth();
day = dateNow.getDate();
year = dateNow.getFullYear();

monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

let calendarM = month;
let calendarY = year;



function CreateCalendar() {


    let htmlContent = "";
    let FebNumberOfDays = "";
    let counter = 1;

    let nextMonth = month + 1;
    let prevMonth = month - 1;


    if (calendarM === 1) {
        if ((calendarY % 100 != 0) && (calendarY % 4 === 0) || (calendarY % 400 === 0)) {
            FebNumberOfDays = 29;
        } else {
            FebNumberOfDays = 28;
        }
    }



    var dayPerMonth = ["31", "" + FebNumberOfDays + "", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31"];


    var nextDate = new Date(nextMonth + ' 1 ,' + calendarY);
    var weekdays = 0;
    var numOfDays = dayPerMonth[calendarM];


    while (counter <= numOfDays) {

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

}
document.addEventListener('DOMContentLoaded', CreateCalendar, false);


function loadmonthyear(){
    const divM = document.querySelector(".titles");
    divM.innerHTML= monthNames[calendarM]+" "+calendarY;

    const tHTML = document.querySelector(".container");
    tHTML.innerHTML = "";
    CreateCalendar();
    console.log(calendarM+" "+calendarY);
}

function prevM() {
    calendarM = (calendarM == 0) ? 11 : calendarM - 1;
    calendarY = (calendarM == 0) ? calendarY - 1 : calendarY;
    loadmonthyear();

}

function nextM(){
    calendarM = (calendarM == 11)%12;
    calendarY = (calendarM == 11)? calendarY+1:calendarY;
    loadmonthyear();
}
