// Client-side data layer for the static version of Speaking Club.
// Replaces the Python server's /api/* endpoints with localStorage,
// so the app can run entirely in the browser with no backend.

const STORAGE_KEYS = {
    data: 'speakingClub.data',
    lessons: 'speakingClub.lessons'
};

const EMPTY_DATA = { words: [], pages: [], current_video: '' };

const ClubStorage = {
    getData() {
        const raw = localStorage.getItem(STORAGE_KEYS.data);
        return raw ? JSON.parse(raw) : { ...EMPTY_DATA };
    },

    saveData(data) {
        localStorage.setItem(STORAGE_KEYS.data, JSON.stringify(data));
        return { status: 'success' };
    },

    getLessons() {
        const raw = localStorage.getItem(STORAGE_KEYS.lessons);
        return raw ? JSON.parse(raw) : {};
    },

    saveLesson(lessonName, lessonData) {
        const lessons = ClubStorage.getLessons();
        lessons[lessonName] = lessonData;
        localStorage.setItem(STORAGE_KEYS.lessons, JSON.stringify(lessons));
        return { status: 'success' };
    },

    deleteLesson(lessonName) {
        const lessons = ClubStorage.getLessons();
        delete lessons[lessonName];
        localStorage.setItem(STORAGE_KEYS.lessons, JSON.stringify(lessons));
        return { status: 'success' };
    },

    // One-time seed so the static version starts with the same content
    // that used to live in speaking_data.json / lessons.json.
    seedIfEmpty(defaultData, defaultLessons) {
        if (localStorage.getItem(STORAGE_KEYS.data) === null && defaultData) {
            localStorage.setItem(STORAGE_KEYS.data, JSON.stringify(defaultData));
        }
        if (localStorage.getItem(STORAGE_KEYS.lessons) === null && defaultLessons) {
            localStorage.setItem(STORAGE_KEYS.lessons, JSON.stringify(defaultLessons));
        }
    }
};
