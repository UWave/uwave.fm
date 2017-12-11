$(document).ready(function() {
    function icecastStats(data) {
        sources = $.parseXML(data).getElementsByTagName("source");
        listeners = 0
        for(i in sources) {
            if(i < sources.length) {
                listeners += parseInt(sources[i].getElementsByTagName("listeners")[0].textContent)
            }
        }
        $('#listeners').html(listeners);
        if(listeners != lastCount) {
            favicon.badge(listeners);
            lastCount = listeners;
        }
    }

    var favicon = new Favico({
        animation: 'none'
    });

    var lastCount = 0;
    
    setInterval(function() {$.get("proxies/icecast.php?page=stats", icecastStats)}, 5000);
})
