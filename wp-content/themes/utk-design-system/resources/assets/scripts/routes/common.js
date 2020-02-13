import Documentation from '../components/Documentation'

export default {
  init() {
    // JavaScript to be fired on all pages
    new Documentation();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
