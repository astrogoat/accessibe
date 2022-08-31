@if (
    Astrogoat\Accessibe\Settings\AccessibeSettings::isEnabled() &&
    ($url = settings('Astrogoat\\Accessibe\\Settings\\AccessibeSettings', 'url'))
)
    <!-- [Accessibe] Start -->
    <script>
        (function() {
            var s = document.createElement('script');
            var h = document.querySelector('head') || document.body;
            s.src = "{{ $url }}";
            s.async = true;
            s.onload = function() {
                acsbJS.init({
                    statementLink: '',
                    footerHtml: '',
                    hideMobile: false,
                    hideTrigger: false,
                    disableBgProcess: false,
                    language: 'en',
                    position: 'left',
                    leadColor: '#000000',
                    triggerColor: '#000000',
                    triggerRadius: '50%',
                    triggerPositionX: 'left',
                    triggerPositionY: 'bottom',
                    triggerIcon: 'people',
                    triggerSize: 'small',
                    triggerOffsetX: 20,
                    triggerOffsetY: 20,
                    mobile: {
                        triggerSize: 'small',
                        triggerPositionX: 'left',
                        triggerPositionY: 'bottom',
                        triggerOffsetX: 10,
                        triggerOffsetY: 10,
                        triggerRadius: '50%'
                    }
                });
            }
            h.appendChild(s);
        })();
    </script>
    <!-- [Accessibe] End -->
@endif
