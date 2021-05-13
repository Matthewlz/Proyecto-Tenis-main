$(document).ready(function () {
    $("#calendar").evoCalendar({
        theme: "Midnight Blue",
        language: "es",
        calendarEvents: [
            {
                id: "event1", // Event's ID (required)
                name: "New Year", // Event name (required)
                badge: "03/08",
                date: "May/3/2021", // Event date (required)
                description: "Festa.", // Event description (optional)
                type: "holiday", // Event type (required)
                everyweek: false // Same event every year (optional)
            },
            {
                id: "event2",
                name: "Custom Date",
                badge: "03/08- 05/08",
                date: ["May/03/2021", "May/05/2021"],
                description: "Description here",
                type: "event",
                everyYear: false, // Same event every year (optional)
            },
        ],
    });
});
