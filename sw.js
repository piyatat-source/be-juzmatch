self.addEventListener('push', function (event) {
    if (!(self.Notification && self.Notification.permission === 'granted')) {
        return;
    }
    const sendNotification = (title, options) => {
        return self.registration.showNotification(title, options);
    };
    if (event.data) {
        let data = event.data.json(),
            title = data.title;
        delete data.title;
        event.waitUntil(sendNotification(title, data));
    }
});
