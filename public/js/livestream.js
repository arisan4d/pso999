function liveStream() {
    $.ajax({
        url: 'https://stream.raysports.live/en/football',
        type: 'get',
        dataType: 'json',
        data: {
            'token' : '35r5jhj17ijulq1',
            'uuid' : 'd23xmvkh4zeqg8n'
        }

    });
}

liveStream();