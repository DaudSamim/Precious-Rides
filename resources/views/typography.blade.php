@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Typography</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <p>Create lighter, secondary text in any heading with a generic <code>&lt;small&gt;</code> tag
                        or the <code>.small</code> class.</p>
                    <div class="bs-example bs-example-type" data-example-id="small-headings">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <h1>h1. Bootstrap heading
                                        <small>Secondary text</small>
                                    </h1>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2>h2. Bootstrap heading
                                        <small>Secondary text</small>
                                    </h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>h3. Bootstrap heading
                                        <small>Secondary text</small>
                                    </h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>h4. Bootstrap heading
                                        <small>Secondary text</small>
                                    </h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>h5. Bootstrap heading
                                        <small>Secondary text</small>
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>h6. Bootstrap heading
                                        <small>Secondary text</small>
                                    </h6>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Alignment classes & Addresses</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <p>Easily realign text to components with text alignment classes.</p>
                    <div class="bs-example" data-example-id="text-alignment"><p class="text-left">Left aligned
                            text.</p>
                        <p class="text-center">Center aligned text.</p>
                        <p class="text-right">Right aligned text.</p>
                        <p class="text-justify">Justified text.</p>
                        <p class="text-nowrap">No wrap text.</p></div>
                    <strong class="ttu">Addresses</strong>
                    <p>Present contact information for the nearest ancestor or the entire body of work. Preserve
                        formatting by ending all lines with <code>&lt;br&gt;</code>.</p>
                    <div class="bs-example" data-example-id="simple-address">
                        <address><strong>Twitter, Inc.</strong><br> 1355 Market Street, Suite 900<br> San Francisco,
                            CA 94103<br> <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                        <address><strong>Full Name</strong><br> <a href="mailto:#">first.last@example.com</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Transformation classes</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <p>Transform text in components with text capitalization classes.</p>
                    <div class="bs-example" data-example-id="text-capitalization"><p class="text-lowercase">
                            Lowercased text.</p>
                        <p class="text-uppercase">Uppercased text.</p>
                        <p class="text-capitalize">Capitalized text.</p></div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Blockquote</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <p>Style and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.
                    </p>
                    <div class="bs-example" data-example-id="blockquote-cite">
                        <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat
                                a ante.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Unordered</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="bs-example" data-example-id="simple-ul">
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit
                                <ul>
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                </ul>
                            </li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Ordered</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="bs-example" data-example-id="simple-ol">
                        <ol>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit</li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Lead body copy</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <p>Make a paragraph stand out by adding <code>.lead</code>.</p>
                    <div class="bs-example" data-example-id="lead-copy"><p class="lead">Vivamus sagittis lacus vel
                            augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p></div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Marked text</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <p>For highlighting a run of text due to its relevance in another context, use the <code>&lt;mark&gt;</code>
                        tag.</p>
                    <div class="bs-example" data-example-id="simple-mark">
                        <p>You can use the mark tag to
                            <mark>highlight</mark>
                            text.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Deleted text</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <p>For indicating blocks of text that have been deleted use the <code>&lt;del&gt;</code> tag.
                    </p>
                    <div class="bs-example" data-example-id="simple-del">
                        <p>
                            <del>This line of text is meant to be treated as deleted text.</del>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Strikethrough text</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <p>For indicating blocks of text that are no longer relevant use the <code>&lt;s&gt;</code> tag.
                    </p>
                    <div class="bs-example" data-example-id="simple-s"><p><s>This line of text is meant to be
                                treated as no longer accurate.</s></p></div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Inserted text</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <p>For indicating additions to the document use the <code>&lt;ins&gt;</code> tag.</p>
                    <div class="bs-example" data-example-id="simple-ins">
                        <p>
                            <ins>This line of text is meant to be treated as an addition to the document.</ins>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Underlined text</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <p>To underline text use the <code>&lt;u&gt;</code> tag.</p>
                    <div class="bs-example" data-example-id="simple-u"><p><u>This line of text will render as
                                underlined</u></p></div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Small text</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <p>You may alternatively use an inline element with <code>.small</code> in place of any <code>&lt;small&gt;</code>.
                    </p>
                    <div class="bs-example" data-example-id="simple-small">
                        <p>
                            <small>This line of text is meant to be treated as fine print.</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Bold & Italics</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <p>For emphasizing a snippet of text with a heavier font-weight.</p>
                    <div class="bs-example" data-example-id="simple-strong"><p>The following snippet of text is
                            <strong>rendered as bold text</strong>.</p></div>
                    <p>For emphasizing a snippet of text with italics.</p>
                    <div class="bs-example" data-example-id="simple-em"><p>The following snippet of text is <em>rendered
                                as italicized text</em>.</p></div>
                </div>
            </div>
        </div>
    </div>
@endsection