<?php
declare(strict_types=1);

const BACKGROUND_MOODS = [
    'calm' => 'Calm',
    'energetic' => 'Energetic',
    'professional' => 'Professional',
    'playful' => 'Playful',
    'nature' => 'Nature',
    'night-city' => 'Night City',
    'minimal-dark' => 'Minimal Dark',
    'warm' => 'Warm',
];

const BACKGROUND_KEYWORDS = [
    'energetic' => ['sport', 'sports', 'travel', 'adventure', 'competition', 'party', 'music', 'dance', 'game', 'games', 'race', 'football', 'olympic', 'action', 'gym', 'fitness'],
    'professional' => ['business', 'work', 'career', 'technology', 'money', 'finance', 'interview', 'job', 'office', 'education', 'school', 'university', 'study', 'meeting', 'economy'],
    'nature' => ['nature', 'animal', 'animals', 'season', 'seasons', 'weather', 'plant', 'plants', 'environment', 'ocean', 'mountain', 'forest', 'garden', 'earth', 'climate'],
    'night-city' => ['city', 'nightlife', 'future', 'urban', 'transport', 'transportation', 'technology', 'internet', 'space', 'science fiction'],
    'minimal-dark' => ['discipline', 'time management', 'goal', 'goals', 'philosophy', 'psychology', 'emotion', 'emotions', 'habit', 'habits', 'responsibility', 'success', 'motivation'],
    'warm' => ['friendship', 'love', 'family', 'gratitude', 'holiday', 'holidays', 'culture', 'tradition', 'traditions', 'celebration', 'wedding', 'childhood', 'memories'],
    'playful' => ['hobby', 'hobbies', 'food', 'fun', 'movie', 'movies', 'toy', 'toys', 'cartoon', 'humor', 'joke', 'pet', 'pets'],
];

function mood_for_topic(string $topic): string {
    $topic = mb_strtolower($topic);
    $bestMood = 'calm';
    $bestScore = 0;
    foreach (BACKGROUND_KEYWORDS as $mood => $keywords) {
        $score = 0;
        foreach ($keywords as $kw) {
            if (mb_strpos($topic, $kw) !== false) {
                $score++;
            }
        }
        if ($score > $bestScore) {
            $bestScore = $score;
            $bestMood = $mood;
        }
    }
    return $bestMood;
}
