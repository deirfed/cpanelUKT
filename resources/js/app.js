import './bootstrap';


import { Terminal } from 'xterm';
import 'xterm/css/xterm.css';

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('xterm-container');
    if (container) {
        const term = new Terminal({
            theme: {
                background: '#000000',
                foreground: '#00FF00',
            },
            rows: 15,
        });

        term.open(container);
        term.write('Welcome to SSH SRV902-VPS \n\r');
        term.write('Ubuntu Server 20.04.06 Enterprise\n\r');
        term.write('login: ');

        term.onKey(({ key }) => {
            term.write(key);
        });
    }
});
