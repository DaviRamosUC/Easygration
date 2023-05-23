import './bootstrap';

import Alpine from 'alpinejs';
import 'flowbite';

window.Alpine = Alpine;

Alpine.start();

import.meta.glob([
  '../assets/images/**',
  '../assets/icons/**',
]);