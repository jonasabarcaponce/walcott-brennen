const seatSelectorContent = document.getElementById('seatSelectorContent');


document.getElementById('vipDerecha').addEventListener('click', function() {

    // Title 
    var title = '<h3 class="text-lg font-semibold mb-2">Entrada VIP</h3>'
    // Content
    var content = '<p class="text-gray-600 dark:text-gray-400">Costo $1200 mxn + 30 serv</p>';

    // update innerhtml 
    seatSelectorContent.innerHTML = title + content;

});