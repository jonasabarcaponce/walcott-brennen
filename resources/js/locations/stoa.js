import Seatchart from 'seatchart';

var options = {
    map: {
        rows: 12,
        columns: 26,
        columnLabels: Array.from({ length: 26 }, (_, i) => (i + 5).toString()), // ['5', '6', ..., '30']
        rowLabels: Array.from({ length: 12 }, (_, i) => (i + 1).toString()), // optional: 1–12 row labels
        seatTypes: {
            vip: {
                label: 'VIP',
                cssClass: 'vip',
                price: 1200,
                seatRows: [0, 1, 2, 3, 4, 5],
            },
            platino: {
                label: 'Platino',
                cssClass: 'platinum',
                price: 10,
                seatRows: [6, 7, 8, 9, 10, 11],
            },
        },
        disabledSeats: [
            { row: 6, col: 6 },
            { row: 6, col: 7 },
            { row: 6, col: 8 },
            { row: 6, col: 9 },
            { row: 6, col: 10 },
            { row: 6, col: 11 },
            { row: 6, col: 12 },
            { row: 6, col: 13 },
            { row: 6, col: 14 },
            { row: 6, col: 15 },
            { row: 6, col: 16 },
            { row: 6, col: 17 },
        ],
        rowSpacers: [6],
        columnSpacers: [12],
    },
};

var element = document.getElementById('container');
var sc = new Seatchart(element, options);
sc.addEventListener('submit', function handleSubmit(e) {
    alert('Total: ' + e.total + '€');
});
