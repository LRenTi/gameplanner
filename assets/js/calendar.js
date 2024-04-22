document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        allDaySlot: false, // Keine ganztägigen Termine
        themesystem: 'bootstrap5', // Bootstrap Theme
        buttonText: { // Ändern Sie die Texte der Standardbuttons
            today: 'Heute',
            month: 'Monat',
            week: 'Woche',
            day: 'Tag',
            list: 'Liste'
          },
        initialView: 'timeGridWeek', // Standardansicht
        locales: 'de-at', // Sprache einstellen
        slotMinTime: '08:00:00', // Minimale Uhrzeit
        slotMaxTime: '22:00:00', // Maximale Uhrzeit
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'timeGridWeek,dayGridMonth,listWeek',
        },
        events: [
          {
            title: 'Beispieltermin',
            start: '2024-04-23T10:00:00',
            end: '2024-04-23T12:00:00'
          }
        ]
    });
    calendar.render();
    $(".fc-col-header-cell-cushion").css("color", "inherit").css("text-decoration", "none");
  });