let events = ['click', 'mouseover', 'mouseout', 'keydown', 'scroll'];

events.forEach(function(event) {
   window.addEventListener(event, function() {
      fetch(vec_ajax.ajax_url, {
         method: 'POST',
         headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
         },
         body: new URLSearchParams({
            action: 'render_mega_menu'
         })
      })
         .then(response => response.text())
         .then(response => {
            document.getElementById('nav').innerHTML = response;
         })
         .catch(error => console.error('Error:', error));
   });
});