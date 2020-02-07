import React from 'react';
import ReactDOM from 'react-dom';

import System from './System';
import './scss/styles.scss';

if (document.getElementById('utk-design-system')) {
    ReactDOM.render(<System />, document.getElementById('utk-design-system'));
}