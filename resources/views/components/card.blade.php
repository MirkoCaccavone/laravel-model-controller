<div class="card h-100 shadow-sm">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <div class="card-text">
            <div class="mb-2"><strong>Titolo Originale:</strong> {{ $original_title}}</div>
            <div class="mb-2"><strong>Nazionalità:</strong> {{ $nationality }}</div>
            <div class="mb-2"><strong>Data di uscita:</strong> {{ $date }}</div>
            <div>
                <strong>Voto:</strong> 
                @php
                    $voteValue = floatval($vote->toHtml());
                    $badgeColor = $voteValue >= 7 ? 'success' : ($voteValue >= 6 ? 'warning' : 'danger');
                @endphp
                <span class="badge bg-{{ $badgeColor }}">
                    {{ $vote }}/10
                </span>
            </div>
        </div>
    </div>
</div>