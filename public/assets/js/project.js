
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
                right: 'month,basicWeek,basicDay'
            },
            editable: true,
            events: [
                {
                    title: 'Website Launch',
                    start: '2015-01-01'
                },
                {
                    title: 'Celebration',
                    start: '2015-01-19'
                }
            ],
            eventClick: function(calEvent, jsEvent, view) {
                alert('Event: ' + calEvent.title);
                $(this).css('border-color', 'red');
            }
        });

    $('#currency_widget_holder').currency_widget(); // currency widget with default options
    $('#currency_widget_holder').currency_widget({ editable_amount: false }); // don't let the visitor change the amount to convert
    $('#currency_widget_holder').currency_widget({ amount: '1' }); // preset the amount
    $('#currency_widget_holder').currency_widget({ source_currency: 'EUR', target_currency: 'USD' }); // preset the source and target currencies
    $('#currency_widget_holder').currency_widget({ editable_source_currency: false, editable_target_currency: false }); // don't let the visitor change currencies
    $('#currency_widget_holder').currency_widget({
         source_currencies: { 'USD': 'US Dollar ($)', 'EUR': 'Euro (€)', 'SEK': 'Svenska kronor (kr)','ZAR':'South African Rand (ZAR)'}
        ,target_currencies: { 'USD': 'US Dollar ($)', 'EUR': 'Euro (€)', 'SEK': 'Svenska kronor (kr)','ZAR':'South African Rand (ZAR)'}
    }); // set the available currencies
    $('#currency_widget_holder').currency_widget({ header: true, header_text: 'Currency converter' }); // set the header
    $('#currency_widget_holder').currency_widget({ url: 'ajax.php' }); // set the url to the serversite converter
    $('#currency_widget_holder').currency_widget({
         show_labels: true
        ,labels: {
             amount: 'Amount:'
            ,from: 'From:'
            ,to: 'To:'
            ,convert: 'Convert!'
            ,price: 'Price:'
        }
    }); // Whether to show labels and the labels themselves

    // you can also set these options globally, e.g.
    $.currency_widget.defaults.amount = '1';
    $('#currency_widget_holder').currency_widget();

    $("#clock1").clock();

    });
