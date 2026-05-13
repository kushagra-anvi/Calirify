import './bootstrap';
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import collapse from '@alpinejs/collapse';
import intersect from '@alpinejs/intersect';

Alpine.plugin(focus);
Alpine.plugin(collapse);
Alpine.plugin(intersect);

window.Alpine = Alpine;
Alpine.start();
