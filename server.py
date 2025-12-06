import http.server
import socketserver
import json
import os
from urllib.parse import parse_qs, urlparse

PORT = 8000
DATA_FILE = 'speaking_data.json'
LESSONS_FILE = 'lessons.json'

# Initialize data files
if not os.path.exists(DATA_FILE):
    initial_data = {
        'words': [],
        'pages': [],
        'current_video': ''
    }
    with open(DATA_FILE, 'w', encoding='utf-8') as f:
        json.dump(initial_data, f, ensure_ascii=False)

if not os.path.exists(LESSONS_FILE):
    with open(LESSONS_FILE, 'w', encoding='utf-8') as f:
        json.dump({}, f, ensure_ascii=False)

class SpeakingClubHandler(http.server.SimpleHTTPRequestHandler):
    def do_GET(self):
        if self.path == '/' or self.path == '/admin':
            self.send_response(200)
            self.send_header('Content-type', 'text/html; charset=utf-8')
            self.end_headers()
            self.wfile.write(self.get_admin_html().encode('utf-8'))
            return
        elif self.path == '/display':
            self.send_response(200)
            self.send_header('Content-type', 'text/html; charset=utf-8')
            self.end_headers()
            self.wfile.write(self.get_display_html().encode('utf-8'))
            return
        elif self.path == '/api/data':
            self.send_response(200)
            self.send_header('Content-type', 'application/json; charset=utf-8')
            self.end_headers()
            with open(DATA_FILE, 'r', encoding='utf-8') as f:
                self.wfile.write(f.read().encode('utf-8'))
            return
        elif self.path == '/api/lessons':
            self.send_response(200)
            self.send_header('Content-type', 'application/json; charset=utf-8')
            self.end_headers()
            with open(LESSONS_FILE, 'r', encoding='utf-8') as f:
                self.wfile.write(f.read().encode('utf-8'))
            return
        return super().do_GET()
    
    def do_POST(self):
        if self.path == '/api/save':
            content_length = int(self.headers['Content-Length'])
            post_data = self.rfile.read(content_length)
            data = json.loads(post_data.decode('utf-8'))
            
            with open(DATA_FILE, 'w', encoding='utf-8') as f:
                json.dump(data, f, ensure_ascii=False, indent=2)
            
            self.send_response(200)
            self.send_header('Content-type', 'application/json')
            self.end_headers()
            self.wfile.write(json.dumps({'status': 'success'}).encode())
            return
        elif self.path == '/api/save_lesson':
            content_length = int(self.headers['Content-Length'])
            post_data = self.rfile.read(content_length)
            request = json.loads(post_data.decode('utf-8'))
            
            with open(LESSONS_FILE, 'r', encoding='utf-8') as f:
                lessons = json.load(f)
            
            lessons[request['lesson_name']] = request['lesson_data']
            
            with open(LESSONS_FILE, 'w', encoding='utf-8') as f:
                json.dump(lessons, f, ensure_ascii=False, indent=2)
            
            self.send_response(200)
            self.send_header('Content-type', 'application/json')
            self.end_headers()
            self.wfile.write(json.dumps({'status': 'success'}).encode())
            return
        elif self.path == '/api/delete_lesson':
            content_length = int(self.headers['Content-Length'])
            post_data = self.rfile.read(content_length)
            request = json.loads(post_data.decode('utf-8'))
            
            with open(LESSONS_FILE, 'r', encoding='utf-8') as f:
                lessons = json.load(f)
            
            if request['lesson_name'] in lessons:
                del lessons[request['lesson_name']]
            
            with open(LESSONS_FILE, 'w', encoding='utf-8') as f:
                json.dump(lessons, f, ensure_ascii=False, indent=2)
            
            self.send_response(200)
            self.send_header('Content-type', 'application/json')
            self.end_headers()
            self.wfile.write(json.dumps({'status': 'success'}).encode())
            return
        
        self.send_response(404)
        self.end_headers()
    
    def get_admin_html(self):
        return '''<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speaking Club - Admin Panel</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 20px; min-height: 100vh; }
        .container { max-width: 1200px; margin: 0 auto; background: white; border-radius: 15px; padding: 30px; box-shadow: 0 10px 40px rgba(0,0,0,0.2); }
        h1 { color: #667eea; margin-bottom: 30px; text-align: center; }
        h2 { color: #764ba2; margin: 30px 0 15px; padding-bottom: 10px; border-bottom: 2px solid #667eea; }
        .section { margin-bottom: 40px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; color: #333; }
        input[type="text"], textarea { width: 100%; padding: 10px; border: 2px solid #ddd; border-radius: 5px; font-size: 14px; }
        button { background: #667eea; color: white; border: none; padding: 12px 25px; border-radius: 5px; cursor: pointer; font-size: 16px; margin-right: 10px; margin-top: 10px; }
        button:hover { background: #5568d3; }
        .btn-danger { background: #e74c3c; }
        .btn-danger:hover { background: #c0392b; }
        .btn-success { background: #27ae60; }
        .btn-success:hover { background: #229954; }
        .btn-info { background: #3498db; }
        .btn-info:hover { background: #2980b9; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 12px; text-align: left; border: 1px solid #ddd; }
        th { background: #667eea; color: white; }
        tr:nth-child(even) { background: #f9f9f9; }
        .page-item { background: #f0f0f0; padding: 15px; border-radius: 8px; margin-bottom: 15px; }
        .success-msg { background: #27ae60; color: white; padding: 15px; border-radius: 5px; margin-bottom: 20px; display: none; }
        .grid-3 { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 10px; }
        .lesson-management { background: #f8f9fa; padding: 20px; border-radius: 10px; margin-bottom: 30px; }
        .lesson-item { background: white; padding: 15px; border-radius: 8px; margin-bottom: 10px; display: flex; justify-content: space-between; align-items: center; border: 2px solid #ddd; }
        .lesson-item:hover { border-color: #667eea; }
        .current-lesson { border: 3px solid #27ae60; background: #e8f5e9; }
        .lesson-name { font-weight: bold; color: #333; font-size: 16px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎯 Speaking Club - Admin Panel</h1>
        <div class="success-msg" id="successMsg">Changes saved successfully!</div>
        
        <div class="lesson-management">
            <h2>📚 Lesson Management</h2>
            <div class="form-group">
                <label>Current Lesson: <span id="currentLessonName" style="color: #27ae60;">New Lesson</span></label>
            </div>
            <div class="form-group">
                <label>Save Current Lesson As:</label>
                <input type="text" id="lessonName" placeholder="e.g., Lesson 1 - Family">
            </div>
            <button class="btn-success" onclick="saveLesson()">💾 Save as Lesson</button>
            <button class="btn-info" onclick="newLesson()">📄 New Lesson</button>
            
            <h3 style="margin-top: 20px; margin-bottom: 10px;">Saved Lessons:</h3>
            <div id="lessonsList"></div>
        </div>
        
        <div class="section">
            <h2>📹 Background Video</h2>
            <div class="form-group">
                <label>Video URL (YouTube or direct link):</label>
                <input type="text" id="videoUrl" placeholder="https://www.youtube.com/watch?v=VIDEO_ID or video.mp4">
            </div>
        </div>

        <div class="section">
            <h2>📚 Vocabulary Table</h2>
            <div class="form-group">
                <label>Quick Import (format: english / russian / kazakh):</label>
                <textarea id="bulkWords" rows="5" placeholder="family / семья / отбасы
parents / родители / ата-аналар"></textarea>
                <button onclick="importWords()">📥 Import All Words</button>
            </div>
            
            <div class="grid-3">
                <div class="form-group">
                    <label>English:</label>
                    <input type="text" id="wordEn" placeholder="Hello">
                </div>
                <div class="form-group">
                    <label>Russian:</label>
                    <input type="text" id="wordRu" placeholder="Привет">
                </div>
                <div class="form-group">
                    <label>Kazakh:</label>
                    <input type="text" id="wordKz" placeholder="Сәлем">
                </div>
            </div>
            <button onclick="addWord()">➕ Add Word</button>
            
            <table id="wordsTable">
                <thead>
                    <tr><th>English</th><th>Русский</th><th>Қазақша</th><th>Action</th></tr>
                </thead>
                <tbody id="wordsBody"></tbody>
            </table>
        </div>

        <div class="section">
            <h2>📄 Question Pages</h2>
            <div class="form-group">
                <label>Quick Import (format: question / translation - two per page):</label>
                <textarea id="bulkQuestions" rows="5" placeholder="Who is in your family? / Кто в вашей семье? / Отбасыңызда кімдер бар?
How many people? / Сколько человек? / Қанша адам?"></textarea>
                <button onclick="importQuestions()">📥 Import Questions</button>
            </div>
            
            <div class="form-group">
                <label>Question 1 (English):</label>
                <textarea id="q1En" rows="2" placeholder="What is your name?"></textarea>
            </div>
            <div class="form-group">
                <label>Translation 1 (Russian/Kazakh):</label>
                <textarea id="q1Tr" rows="2" placeholder="Как вас зовут? / Атыңыз кім?"></textarea>
            </div>
            <div class="form-group">
                <label>Question 2 (English):</label>
                <textarea id="q2En" rows="2" placeholder="Where are you from?"></textarea>
            </div>
            <div class="form-group">
                <label>Translation 2 (Russian/Kazakh):</label>
                <textarea id="q2Tr" rows="2" placeholder="Откуда вы? / Қайдансыз?"></textarea>
            </div>
            <button onclick="addPage()">➕ Add Page</button>
            <div id="pagesContainer"></div>
        </div>

        <div style="text-align: center; margin-top: 30px;">
            <button class="btn-success" onclick="saveToDisplay()">💾 Save to Display</button>
            <button onclick="window.open('/display', '_blank')">👁️ Open Display Page</button>
        </div>
    </div>

    <script>
        let data = {words: [], pages: [], current_video: ''};
        let currentLessonName = null;
        let lessons = {};

        async function loadData() {
            const res = await fetch('/api/data');
            data = await res.json();
            document.getElementById('videoUrl').value = data.current_video || '';
            renderWords();
            renderPages();
            await loadLessons();
        }

        async function loadLessons() {
            const res = await fetch('/api/lessons');
            lessons = await res.json();
            renderLessonsList();
        }

        function renderLessonsList() {
            const container = document.getElementById('lessonsList');
            const lessonNames = Object.keys(lessons);
            
            if (lessonNames.length === 0) {
                container.innerHTML = '<p style="color: #999; font-style: italic;">No saved lessons yet</p>';
                return;
            }
            
            container.innerHTML = '';
            lessonNames.forEach(name => {
                const isActive = name === currentLessonName;
                container.innerHTML += `
                    <div class="lesson-item ${isActive ? 'current-lesson' : ''}">
                        <span class="lesson-name">${name}</span>
                        <div>
                            <button class="btn-info" onclick="loadLesson('${name}')">📂 Load</button>
                            <button class="btn-danger" onclick="deleteLesson('${name}')">🗑️ Delete</button>
                        </div>
                    </div>
                `;
            });
        }

        function loadLesson(name) {
            if (!lessons[name]) return;
            data = JSON.parse(JSON.stringify(lessons[name]));
            currentLessonName = name;
            document.getElementById('currentLessonName').textContent = name;
            document.getElementById('videoUrl').value = data.current_video || '';
            renderWords();
            renderPages();
            renderLessonsList();
        }

        async function saveLesson() {
            const name = document.getElementById('lessonName').value.trim();
            if (!name) {
                alert('Please enter a lesson name');
                return;
            }
            
            data.current_video = document.getElementById('videoUrl').value.trim();
            
            await fetch('/api/save_lesson', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({
                    lesson_name: name,
                    lesson_data: data
                })
            });
            
            currentLessonName = name;
            document.getElementById('currentLessonName').textContent = name;
            document.getElementById('lessonName').value = '';
            
            await loadLessons();
            showSuccess('Lesson saved: ' + name);
        }

        async function deleteLesson(name) {
            if (!confirm(`Delete lesson "${name}"?`)) return;
            
            await fetch('/api/delete_lesson', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({lesson_name: name})
            });
            
            if (currentLessonName === name) {
                newLesson();
            }
            
            await loadLessons();
            showSuccess('Lesson deleted');
        }

        function newLesson() {
            data = {words: [], pages: [], current_video: ''};
            currentLessonName = null;
            document.getElementById('currentLessonName').textContent = 'New Lesson';
            document.getElementById('videoUrl').value = '';
            renderWords();
            renderPages();
            renderLessonsList();
        }

        function renderWords() {
            const tbody = document.getElementById('wordsBody');
            tbody.innerHTML = '';
            data.words.forEach((word, i) => {
                tbody.innerHTML += `<tr><td>${word.en}</td><td>${word.ru}</td><td>${word.kz}</td><td><button class="btn-danger" onclick="deleteWord(${i})">🗑️</button></td></tr>`;
            });
        }

        function addWord() {
            const en = document.getElementById('wordEn').value.trim();
            const ru = document.getElementById('wordRu').value.trim();
            const kz = document.getElementById('wordKz').value.trim();
            if (en && ru && kz) {
                data.words.push({en, ru, kz});
                renderWords();
                document.getElementById('wordEn').value = '';
                document.getElementById('wordRu').value = '';
                document.getElementById('wordKz').value = '';
            }
        }

        function importWords() {
            const bulk = document.getElementById('bulkWords').value.trim();
            if (!bulk) return;
            
            const lines = bulk.split('\\n');
            lines.forEach(line => {
                const parts = line.split('/').map(p => p.trim());
                if (parts.length >= 3 && parts[0] && parts[1] && parts[2]) {
                    data.words.push({en: parts[0], ru: parts[1], kz: parts[2]});
                }
            });
            
            renderWords();
            document.getElementById('bulkWords').value = '';
        }

        function deleteWord(i) {
            data.words.splice(i, 1);
            renderWords();
        }

        function renderPages() {
            const container = document.getElementById('pagesContainer');
            container.innerHTML = '';
            data.pages.forEach((page, i) => {
                container.innerHTML += `<div class="page-item"><h3>Page ${i + 1}</h3><p><strong>Q1:</strong> ${page.q1_en}</p><p><strong>T1:</strong> ${page.q1_tr}</p><p><strong>Q2:</strong> ${page.q2_en}</p><p><strong>T2:</strong> ${page.q2_tr}</p><button class="btn-danger" onclick="deletePage(${i})">🗑️ Delete</button></div>`;
            });
        }

        function addPage() {
            const q1_en = document.getElementById('q1En').value.trim();
            const q1_tr = document.getElementById('q1Tr').value.trim();
            const q2_en = document.getElementById('q2En').value.trim();
            const q2_tr = document.getElementById('q2Tr').value.trim();
            if (q1_en && q1_tr && q2_en && q2_tr) {
                data.pages.push({q1_en, q1_tr, q2_en, q2_tr});
                renderPages();
                document.getElementById('q1En').value = '';
                document.getElementById('q1Tr').value = '';
                document.getElementById('q2En').value = '';
                document.getElementById('q2Tr').value = '';
            }
        }

        function importQuestions() {
            const bulk = document.getElementById('bulkQuestions').value.trim();
            if (!bulk) return;
            
            const lines = bulk.split('\\n').filter(l => l.trim());
            for (let i = 0; i < lines.length; i += 2) {
                if (i + 1 < lines.length) {
                    const q1_parts = lines[i].split('/').map(p => p.trim());
                    const q2_parts = lines[i + 1].split('/').map(p => p.trim());
                    if (q1_parts.length >= 2 && q2_parts.length >= 2) {
                        data.pages.push({
                            q1_en: q1_parts[0],
                            q1_tr: q1_parts.slice(1).join(' / '),
                            q2_en: q2_parts[0],
                            q2_tr: q2_parts.slice(1).join(' / ')
                        });
                    }
                }
            }
            renderPages();
            document.getElementById('bulkQuestions').value = '';
        }

        function deletePage(i) {
            data.pages.splice(i, 1);
            renderPages();
        }

        async function saveToDisplay() {
            data.current_video = document.getElementById('videoUrl').value.trim();
            await fetch('/api/save', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(data)
            });
            showSuccess('Saved to display page!');
        }

        function showSuccess(msg) {
            const msgEl = document.getElementById('successMsg');
            msgEl.textContent = msg;
            msgEl.style.display = 'block';
            setTimeout(() => msgEl.style.display = 'none', 3000);
        }

        loadData();
    </script>
</body>
</html>'''
    
    def get_display_html(self):
        return '''<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speaking Club - Display</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #000; overflow-y: auto; }
        #videoBackground { position: fixed; top: 50%; left: 50%; min-width: 100%; min-height: 100%; width: auto; height: auto; transform: translate(-50%, -50%); z-index: 1; }
       #videoBackground.youtube {position: fixed; top: 50%; left: 50%; width: 100vw; height: 100vh;transform: translate(-50%, -50%);object-fit: cover; border: none;pointer-events: auto;}

        .content-overlay { position: relative; z-index: 2; width: 100%; min-height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: flex-start; padding: 40px 20px; pointer-events: none; gap: 20px; }
        .content-box { background: rgba(0, 0, 0, 0.4); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px); padding: 25px; border-radius: 15px; box-shadow: 0 8px 32px rgba(0, 0, 0, 0.6); border: 1px solid rgba(255, 255, 255, 0.2); pointer-events: auto; color: white; animation: fadeIn 0.8s ease-in; max-width: 700px; width: 100%; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        table { width: 100%; border-collapse: collapse; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 10px; overflow: hidden; }
        th { background: rgba(102, 126, 234, 0.8); color: white; padding: 12px; font-size: 1em; text-align: left; }
        td { padding: 12px; border-bottom: 1px solid rgba(255, 255, 255, 0.2); font-size: 0.95em; color: white; }
        tr:nth-child(even) { background: rgba(255, 255, 255, 0.05); }
        .question-section { background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); padding: 20px; border-radius: 12px; margin-bottom: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); }
        .question { font-size: 1.2em; color: #fff; margin-bottom: 10px; font-weight: bold; }
        .translation { font-size: 1em; color: #f0f0f0; font-style: italic; }
        .navigation { text-align: center; background: rgba(0, 0, 0, 0.4); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px); padding: 20px; border-radius: 15px; box-shadow: 0 8px 32px rgba(0, 0, 0, 0.6); border: 1px solid rgba(255, 255, 255, 0.2); pointer-events: auto; }
        .navigation button { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 12px 30px; border-radius: 25px; cursor: pointer; font-size: 1em; margin: 0 8px; box-shadow: 0 4px 15px rgba(102, 126, 234, 0.6); transition: transform 0.2s; }
        .navigation button:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(102, 126, 234, 0.8); }
        .navigation button:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }
        .page-indicator { text-align: center; color: white; font-size: 1em; margin-top: 10px; text-shadow: 2px 2px 4px rgba(0,0,0,0.8); font-weight: bold; }
    </style>
</head>
<body>
    <div id="videoContainer"></div>
    
    <div class="content-overlay">
        <div class="content-box" id="contentBox"></div>
        
        <div class="navigation">
            <button onclick="prevPage()" id="prevBtn">⬅️ Previous</button>
            <button onclick="nextPage()" id="nextBtn">Next ➡️</button>
            <div class="page-indicator" id="pageIndicator"></div>
        </div>
    </div>

    <script>
        let data = {words: [], pages: [], current_video: ''};
        let currentPage = 0;

        async function loadData() {
            const res = await fetch('/api/data');
            data = await res.json();
            setupVideo();
            renderPage();
        }

        function setupVideo() {
            const container = document.getElementById('videoContainer');
            const videoUrl = data.current_video;
            if (!videoUrl) return;
            
            if (videoUrl.includes('youtube.com') || videoUrl.includes('youtu.be')) {
                let videoId = '';
                if (videoUrl.includes('watch?v=')) {
                    videoId = videoUrl.split('v=')[1].split('&')[0];
                } else if (videoUrl.includes('youtu.be/')) {
                    videoId = videoUrl.split('youtu.be/')[1].split('?')[0];
                } else if (videoUrl.includes('embed/')) {
                    videoId = videoUrl.split('embed/')[1].split('?')[0];
                }
                const embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1&mute=0&loop=1&playlist=${videoId}&controls=1&modestbranding=1&rel=0`;
                container.innerHTML = `<iframe id="videoBackground" class="youtube" src="${embedUrl}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>`;
            } else {
                container.innerHTML = `<video id="videoBackground" autoplay loop muted controls><source src="${videoUrl}" type="video/mp4"></video>`;
            }
        }

        function renderPage() {
            const box = document.getElementById('contentBox');
            
            if (currentPage === 0) {
                box.innerHTML = `<table><thead><tr><th>English</th><th>Русский</th><th>Қазақша</th></tr></thead><tbody>${data.words.map(w => `<tr><td>${w.en}</td><td>${w.ru}</td><td>${w.kz}</td></tr>`).join('')}</tbody></table>`;
            } else {
                const pageData = data.pages[currentPage - 1];
                if (pageData) {
                    box.innerHTML = `<div class="question-section"><div class="question">${pageData.q1_en}</div><div class="translation">${pageData.q1_tr}</div></div><div class="question-section"><div class="question">${pageData.q2_en}</div><div class="translation">${pageData.q2_tr}</div></div>`;
                }
            }
            updateNavigation();
        }

        function updateNavigation() {
            const totalPages = data.pages.length + 1;
            document.getElementById('prevBtn').disabled = currentPage === 0;
            document.getElementById('nextBtn').disabled = currentPage >= totalPages - 1;
            document.getElementById('pageIndicator').textContent = `Page ${currentPage + 1} of ${totalPages}`;
        }

        function nextPage() {
            const totalPages = data.pages.length + 1;
            if (currentPage < totalPages - 1) { 
                currentPage++; 
                renderPage(); 
            }
        }

        function prevPage() {
            if (currentPage > 0) { 
                currentPage--; 
                renderPage(); 
            }
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') nextPage();
            if (e.key === 'ArrowLeft') prevPage();
        });

        loadData();
    </script>
</body>
</html>'''

print(f"🚀 Server starting on http://localhost:{PORT}")
print(f"📋 Admin panel: http://localhost:{PORT}/")
print(f"📺 Display page: http://localhost:{PORT}/display")
print(f"✨ Press Ctrl+C to stop the server")

with socketserver.TCPServer(("", PORT), SpeakingClubHandler) as httpd:
    httpd.serve_forever()