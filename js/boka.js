function reserveSeats() {

        var selectedList = getSelectedList('Reserve Seats');

        if (selectedList) {
                if (confirm('Vill du reservera ' + selectedList + '?')) {
                        document.forms[0].oldStatusCode.value=0;
                        document.forms[0].newStatusCode.value=1;
                        document.forms[0].action='boka/bookseats.php';
                        document.forms[0].submit();
                } else {
                        clearSelection();
                }
        }
}


function cancelSeats() {

        var selectedList = getSelectedList('Cancel Reservation');

        if (selectedList) {
                if (confirm('Vill du ta bort din reserverade plats ' + selectedList + '?')) {
                        document.forms[0].oldStatusCode.value=1;
                        document.forms[0].newStatusCode.value=0;
                        document.forms[0].action='boka/bookseats.php';
                        document.forms[0].submit();
                } else {
                        clearSelection();
                }
        }
}


function confirmSeats() {

        var selectedList = getSelectedList('Confirm Reservation');

        if (selectedList) {
                if (confirm('Vill du boka denna reserverade plats ' + selectedList + '?')) {
                        document.forms[0].oldStatusCode.value=1;
                        document.forms[0].newStatusCode.value=2;
                        document.forms[0].action='boka/bookseats.php';
                        document.forms[0].submit();
                } else {
                        clearSelection();
                }
        }
}


function getSelectedList(actionSelected) {

        // get selected list
        var obj = document.forms[0].elements;
        var selectedList = '';
        for (var i = 0; i < obj.length; i++) {
                if (obj[i].checked && obj[i].name == 'seats[]') {
                        selectedList += obj[i].value + ', ';
                }
        }

        // no selection error
        if (selectedList == '') {
                alert('Vänligen välj en plats innan du klickar på ' + actionSelected);
                return false;
        } else {
                return selectedList;
        }

}

function clearSelection() {
        var obj = document.forms[0].elements;
        for (var i = 0; i < obj.length; i++) {
                if (obj[i].checked) {
                        obj[i].checked = false;
                }
        }
}


function refreshView() {
        clearSelection();
        document.forms[0].action='seats.php';
        document.forms[0].submit();
}