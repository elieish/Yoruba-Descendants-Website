
  jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        Index.initParallaxSlider();
        $('.demo').modernBlink({
            duration:3000,
        });

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
            },
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'Website Launch',
                    start: '2015-01-01'
                }
            ],
            eventClick: function(calEvent, jsEvent, view) {
                alert('Event: ' + calEvent.title);
                $(this).css('border-color', 'red');
            }
        });







    });
