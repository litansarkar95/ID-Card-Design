<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function create_slug($string) {
    // Convert to lowercase
    $slug = strtolower($string);
    // Remove special characters and spaces
    $slug = preg_replace('/[^a-z0-9-]+/', '-', $slug);
    // Trim dashes from both sides
    $slug = trim($slug, '-');
    return $slug;
}


function get_youtube_video_id($url) {
    preg_match(
        '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
        $url,
        $matches
    );
    return isset($matches[1]) ? $matches[1] : null;
}


function get_youtube_thumbnail($url) {
    $video_id = get_youtube_video_id($url);
    if ($video_id) {
        // Use different thumbnail options (default, medium, high)
        return "https://img.youtube.com/vi/$video_id/hqdefault.jpg"; // High quality thumbnail
    }
    return null; // Return null if video ID is not found
}


