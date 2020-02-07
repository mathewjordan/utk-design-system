import React, {Component} from 'react';

class System extends Component {

    constructor(props) {
        super(props);
    };

    render() {

        return (
            <React.Fragment>
                <div className="container">
                    <h1>Lorem Ipsum</h1>
                    <p>Quisque quis felis imperdiet, blandit turpis et, tempus felis. Morbi neque dui, consectetur rutrum commodo non, elementum sed lectus. Nunc viverra nibh vitae metus porta ullamcorper. Integer quis iaculis dui. Suspendisse ac urna imperdiet leo aliquam ullamcorper. Vivamus finibus lacus eu fringilla condimentum. Phasellus non consequat tortor. Phasellus pellentesque, odio vitae dignissim aliquet, tortor tellus vulputate lectus, fermentum blandit nisl purus ut ipsum. Curabitur id ipsum tellus.</p>
                    <h2>Lorem Ipsum</h2>
                    <p>Etiam dapibus sagittis felis non porta. Cras tincidunt, nulla ac pulvinar auctor, mi sem vulputate est, sed eleifend dolor diam sit amet leo. In facilisis id nulla eu mattis. Ut id magna feugiat, sollicitudin nisi vitae, imperdiet leo. Donec vestibulum, ante in tincidunt gravida, mauris erat lacinia dui, eget sagittis nisi augue vel turpis. Ut pretium vestibulum feugiat. Proin vel enim facilisis, pulvinar orci in, feugiat dolor. Aliquam sit amet diam felis. Proin diam lectus, maximus quis pellentesque nec, gravida non elit. Aliquam fringilla lacus libero, et vestibulum sem faucibus eu. Nulla semper faucibus facilisis. Aliquam a nibh vel nulla vehicula viverra.</p>
                    <h3>Button</h3>
                    <p>Default styles</p>
                    <a className="btn btn-primary" href="#">Primary</a>
                    <a className="btn btn-secondary" href="#">Secondary</a>
                    <a className="btn btn-muted" href="#">Muted</a>
                    <p>Outline styles</p>
                    <a className="btn btn-primary btn-outline" href="#">Primary</a>
                    <a className="btn btn-secondary btn-outline" href="#">Secondary</a>
                    <a className="btn btn-muted btn-outline" href="#">Muted</a>
                    <p>Sizing styles</p>
                    <a className="btn btn-primary btn-sm" href="#">Small</a>
                    <a className="btn btn-primary btn-md" href="#">Medium</a>
                    <a className="btn btn-primary btn-lg" href="#">Large</a>
                    <ul>
                        <li>Sed interdum tortor cursus diam mattis pretium.</li>
                        <li>Aliquam volutpat leo a lectus egestas, quis tempor urna varius.</li>
                        <li>Sed at ante eu dui gravida convallis.</li>
                        <li>Curabitur hendrerit purus eget volutpat dignissim.</li>
                    </ul>
                    <h2>Lorem Ipsum</h2>
                    <p>Praesent a blandit nisl, at maximus augue. Nunc tempor tortor consectetur ante pharetra volutpat. Etiam ullamcorper, sapien ut scelerisque euismod, erat ex tristique ligula, et dignissim purus odio at leo. Pellentesque eget justo mollis, sodales mi fringilla, aliquam enim. Donec vel augue gravida, elementum metus vitae, venenatis massa. Suspendisse blandit libero ut urna vestibulum aliquam. Donec vel nisl id nulla eleifend blandit vitae in justo. Integer semper mi non nibh commodo semper. Vestibulum a ligula sit amet elit pretium tempus faucibus pulvinar risus. Donec sit amet tellus elit. Mauris interdum in lorem vel aliquam.</p>
                </div>
            </React.Fragment>
        );
    }
}

export default System;