import deDE from './snippet/de-DE.json';
import enGB from './snippet/en-GB.json';

Shopware.Module.register('backup-module', {
    type: 'plugin',
    name: 'Backup',
    title: 'Backup module',
    description: 'Ein Modul zum backupen von Shopware',
    color: '#62ff80',
    icon: 'default-object-lab-flask',

    snippets: {
        'de-DE': deDE,
        'en-GB': enGB
    },

    routes: {
        overview: {
            component: 'test',
            path: 'overview'
        },
    },

    navigation: [{
        label: 'Backup',
        color: '#62ff80',
        path: 'backup.module.overview',
        icon: 'default-object-lab-flask'
    }]
});
