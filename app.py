from flask import Flask, render_template, request, jsonify
from flask_compress import Compress

import dotenv

from random import choice
import json
import requests

# Getting color palette from album art
import colorthief

LASTFM_API_KEY = dotenv.get_key('./.env', 'LASTFM')

app = Flask(__name__)
Compress(app)


#
#   ROUTES
#
@app.route('/')
def index():
    msg = [
        'Don\'t cry because it\'s over, smile because it happened',
        'This could go one of two ways...', 'Gwa Gwa',
        'It\'s a UNIX system! I know this!', '*internal screaming*',
        'Don\'t forget to drink water!', 'I wish we were better strangers.',
        'If I were you, I\'d run now', 'SILICA GEL "DO NOT EAT".',
        'Gods die too.', 'Eat hotchip and lie'
    ]

    return render_template('index.html', msg=choice(msg))


@app.route('/cretura')
def cretura():
    return render_template('cretura.html')


@app.route('/about')
def about():
    """
    Returns a dict with all the languages I know and their level of knowledge
    0 = Absolute beginner
    1 = Basics
    2 = Intermediate
    3 = Advanced
    4 = Expert
    5 = Undefeated
    """
    languages = {
        'Python': {
            'level': 3,
            'since': '2020',
            'color': '#3776AB',
        },
        'HTML': {
            'level': 4,
            'since': '2021',
            'color': '#E34F26',
        },
        'CSS': {
            'level': 3,
            'since': '2021',
            'color': '#1572B6',
        },
        'JavaScript': {
            'level': 2,
            'since': '2022',
            'color': '#F7DF1E',
        },
        'Sass/SCSS': {
            'level': 4,
            'since': '2022',
            'color': '#CC6699',
        },
        'PHP': {
            'level': 2,
            'since': '2022',
            'color': '#777BB4',
        },
        'SQL': {
            'level': 1,
            'since': '2022',
            'color': '#4479A1',
        },
        'Scratch': {
            'level': 5,
            'since': '2015',
            'color': '#FFD500',
        },
        'Shell': {
            'level': 2,
            'since': '2021',
            'color': '#89E051',
        },
        'Rust': {
            'level': 0,
            'since': '2023',
            'color': '#CE422B',
        },
    }
    
    systems = {
        'Ubuntu': {
            'level': 2,
            'since': '2022',
            'color': '#E95420',
        },
        'Arch': {
            'level': 3,
            'since': '2021',
            'color': '#1793D1',
        },
        'Proxmox': {
            'level': 2,
            'since': '2021',
            'color': '#E57000',
        },
        'Windows': {
            'level': 1,
            'since': '2011',
            'color': '#0078D6',
        },
    }
    return render_template('about.html', languages=languages, systems=systems)


@app.route('/music', methods=['GET', 'POST'])
def music():
    if request.method == 'POST':
        current_tracks = requests.get(
            f'http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=Fluffy_Bean_&api_key={LASTFM_API_KEY}&limit=5&format=json'
        )
        current_tracks = json.loads(current_tracks.text)

        tracks = []

        for track in current_tracks['recenttracks']['track']:
            # As django is weird with @attr in json data
            # I make a new dict with a bool for nowPlaying
            nowPlaying = False
            if '@attr' in track:
                nowPlaying = True

            # Yoink color palette from album art
            color_thief = colorthief.ColorThief(
                requests.get(track['image'][2]['#text'], stream=True).raw)
            palette = color_thief.get_palette()

            tmp_track = {
                'name': track['name'],
                'artist': track['artist']['#text'],
                'album': track['album']['#text'],
                'url': track['url'],
                'image': track['image'][2]['#text'],
                'nowPlaying': nowPlaying,
                'palette': palette[0]
            }

            tracks.append(tmp_track)

        return jsonify(tracks)

    # GET request
    return render_template('music.html')


#
#   ERROR HANDLERS
#
@app.errorhandler(405)
def method_not_allowed(e):
    error = '405'
    msg = 'Method sussy wussy'
    return render_template('error.html', error=error, msg=msg), 404


@app.errorhandler(404)
def page_not_found(e):
    error = '404'
    msg = 'Could not find what you need!'
    return render_template('error.html', error=error, msg=msg), 404


@app.errorhandler(403)
def forbidden(e):
    error = '403'
    msg = 'Go away! This is no place for you!'
    return render_template('error.html', error=error, msg=msg), 403


@app.errorhandler(410)
def gone(e):
    error = '410'
    msg = 'The page is no longer available! *sad face*'
    return render_template('error.html', error=error, msg=msg), 410


@app.errorhandler(500)
def internal_server_error(e):
    error = '500'
    msg = 'Server died inside :c'
    return render_template('error.html', error=error, msg=msg), 500