<script>
    var progressBarContainer = document.getElementById('{{ $id }}');
    var bar = new ProgressBar.Circle(progressBarContainer, {
        color: 'white',
        strokeWidth: 6,
        trailWidth: 3,
        trailColor: '#4A5568',
        easing: 'easeInOut',
        duration: 1200,
        text: {
            autoStyleContainer: false
        },
        from: { color: '#04ff6d', width: 6 },
        to: { color: '#04ff6d', width: 6 },
        step: function(state, circle) {
            circle.path.setAttribute('stroke', state.color);
            circle.path.setAttribute('stroke-width', state.width);
            var value = Math.round(circle.value() * 100);
            if (value === 0) {
                circle.setText('0%');
            } else {
                circle.setText(value + '%');
            }
        }
    });
    bar.animate('{{ $rating }}' / 100); // number to show choose from 0.0 to 1.0
</script>