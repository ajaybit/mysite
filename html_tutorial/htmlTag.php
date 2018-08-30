<?php $page = '4'; include '../header.php' ?>
<div class="w3-container w3-col ">
<div id="leftSideMenu" class="w3-quarter ">
<?php include 'htmlMenu.php' ?>
</div>

<div class="w3-half contant" style="border:.1px solid white ;" id="font">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsive1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="7954664539"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

    <h1>HTML Tags</h1>
  <a href="whatisHtml.php" class="w3-btn w3-border">PREVIOUS</a>    
  <a href="htmlFormatting.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
      
    <h2 class="w3-black w3-panel" style="height:40px">Main Root</h2>
     <table id="tab">
        <tr id="head" >
             <th width="100px">Element</th>
             <th>Discription</th>
         </tr>
         <tr>
            <td><strong><code>&lt;HTML&gt;</code></strong>> </td>
             <td>The <strong><code> HTML &lt;html&gt; element</code></strong> represents the root (top-level element) of an HTML document, so it is also referred to as the root element. All other elements must be descendants of this element.</td>
         </tr>         
    </table >
      <h2 class="w3-black w3-panel" style="height:40px">Document matadata</h2>
    <p>Metadata contains information about the page. This includes information about styles, scripts and data to help software (search engines, browsers, etc.) use and render the page. Metadata for styles and scripts may be defined in the page or link to another file that has the information.</p>
    <table id="tab">
        <tr id="head" >
             <th width="100px">Element</th>
             <th>Discription</th>
         </tr>
         <tr>
            <td><strong><code>&lt;base&gt;</code></strong> </td>
             <td>The <strong><code> HTML &lt;base&gt; element</code></strong> specifies the base URL to use for all relative URLs contained within a document. There can be only one <code>&lt;base&gt;</code> element in a document. </td>
         </tr>  
        <tr>
            <td><strong><code>&lt;head&gt;</code></strong></td>
            <td>The <strong><code> HTML &lt;head&gt; element</code></strong> provides general information (metadata) about the document, including its title and links to its scripts and style sheets.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;link&gt;</code></strong></td>
            <td>The <strong><code> HTML &lt;link&gt; element</code></strong> specifies relationships between the current document and an external resource. Possible uses for this element include defining a relational framework for navigation. This element is most used to link to style sheets.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;meta&gt;</code></strong></td>
            <td>The <strong><code> HTML &lt;meta&gt; element</code></strong> represents metadata that cannot be represented by other HTML meta-related elements, like <strong><code>&lt;base&gt;</code></strong>, <strong><code>&lt;link&gt;</code></strong>, <strong><code>&lt;script&gt;></code></strong>, <strong><code>&lt;style&gt;</code></strong> or <strong><code>&lt;title&gt;</code></strong></td>
        </tr>
        <tr>
            <td><strong><code>&lt;style&gt;</code></strong></td>
            <td>The <strong><code> HTML &lt;style&gt; element</code></strong> contains style information for a document, or part of a document. By default, the style instructions written inside that element are expected to be CSS.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;title&gt;</code></strong></td>
            <td>The <strong><code> HTML &lt;title&gt; element</code></strong> defines the title of the document, shown in a browser's title bar or on the page's tab. It can only contain text, and any contained tags are ignored.</td>
        </tr>        
    </table>
    <h2 class="w3-black w3-panel" style="height:40px">Content sectioning</h2>
    <p>Content sectioning elements allow you to organize the document content into logical pieces. Use the sectioning elements to create a broad outline for your page content, including header and footer navigation, and heading elements to identify sections of content.</p>
    <table id="tab">
        <tr id="head" >
             <th width="100px">Element</th>
             <th>Discription</th>
         </tr>
        <tr>
            <td><strong><code>&lt;address&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;address&gt; element</code></strong> supplies contact information for it's nearest <strong><code>&lt;article&gt;</code></strong> or <strong><code>&lt;body&gt;</code></strong> ancestor; in the latter case, it applies to the whole document.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;article&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;article&gt; element</code></strong> represent a self-contained composition in document, page, application, or site, which is intended to be independently distributable or reusable. Examples include: a forum post, a magazine or newspaper article, or a blog entry.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;aside&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;aside&gt; element</code></strong> represents a section of document with content connection tangentially to the main content of the document (often present as a sidebar).</td>            
        </tr>
        <tr>
            <td><strong><code>&lt;footer&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;footer&gt; element</code></strong> represents a footer for its nearest <span style="color:skyblue">sectioning content</span> or <span style="color:skyblue">sectioning root element</span> element. A footer typically contains imformation about the author of the section, copyright data of links to related documents.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;header&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;header&gt; element</code></strong> represents a group of introductory or navigational aids. It may contain some heading elements but also other elements like a logo, a seach form, so on.</td>
            
        </tr>
        <tr>
            <td><strong><code>&lt;hgroup&gt;</code></strong> </td>
            <td>The <strong><code>HTML &lt;hroup&gt; element</code></strong> represents a multi-level heading for a section of a document. It groups a set of <span><code>&lt;h1&gt;-&lt;h6&gt;</code></span> elements</td>
        </tr>
        <tr>
          <td><strong><code>&lt;nav&gt;</code></strong></td>
          <td>The <strong><code>HTML &lt;nav&gt; element</code></strong> represents a ection of a page whose purpose is to provide navigation link, either within the current document or other documents. Common examples of navigation section are menus, tables of content, and indexes.</td>
        </tr>
        <tr>
          <td><strong><code>&lt;section&gt;</code></strong></td>
          <td>The <strong><code>HTML &lt;section&gt; element</code></strong> represents a standalone section of fuctionality contained within a HTML document, typically with a heading, which doesn't have a more specific element to represent it.</td>
        </tr>
    </table>
<div >
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- FooterBanner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:650px;height:200px"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="4521975542"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    <h2 class="w3-black w3-panel" style="height:40px">Text Content</h2>
    <p>Use HTML text content elements to organize blocks or sections of content placed between the opening <strong><code>&lt;body&gt;</code></strong> and closing <strong><code>&lt;/body&gt;</code></strong>> tags. Important for accessibility and SEO, these elements identify the purpose or structure of that content. </p>
    <table id="tab">
        <tr id="head" >
             <th width="100px">Element</th>
             <th>Discription</th>
         </tr>
         <tr>
           <td><strong><code>&lt;blockquote&gt;</code></strong></td>
           <td>The <strong><code>HTML &lt;blockquote&gt; element</code></strong> indincates that the enclosed text is an extended quotation. Usually, this is rendered visually by indention. A URL for the source of the quotaion may be given using the <strong>cite</strong> attribute, while a text representaion of the source cna be given the <strong><code>&lt;cite&gt;</code></strong> element.</td>
         </tr>
         <tr>
           <td><strong><code>&lt;dd&gt;</code></strong></td>
           <td>The <strong><code>HTML &lt;dd&gt; element</code></strong> indicates the discription of a term in a description list (<strong><code>&lt;dl&gt;</code></strong>).</td>
         </tr>
         <tr>
           <td><strong><code>&lt;div&gt;</code></strong></td>
           <td>The <strong><code>HTML &lt;div&gt; element</code></strong> is a genric container for flow control and does not inherently represent anything. Use it to group elements for purpose such as styling making a section of document in a different language, and so on</td>
         </tr>
         <tr>
           <td><strong><code>&lt;dl&gt;</code></strong></td>
           <td>The <strong><code>HTML &lt;dl&gt; element</code></strong> represents a description list. The element encloses a list of group od terms and descriptions. Common uses for this element are implemented a glossary or to display metadata (a list of key- value pairs)</td>
         </tr>
         <tr>
           <td><strong><code>&lt;dt&gt;</code></strong></td>
           <td>The <strong><code>HTML &lt;dt&gt; element</code></strong> identifies a term in a description list. This element can occur only as a child element of a <strong><code>&lt;dl&gt;</code></strong>. It is usually followed by a <strong><code>&lt;dd&gt;</code></strong> element; however, multiple <code>&lt;dt&gt;</code> elements in a row indicate several terms that are all defined by the immediate next<strong><code> &lt;dd&gt;</code></strong> element.</td>
         </tr>
         <tr>
           <td><strong><code>&lt;figcaption&gt;</code></strong></td>
           <td>The <strong><code>HTML &lt;figcaption&gt; element</code></strong> represents a caption or a legend associated with a figure or an illustration described by the rest of the data of the <strong><code>&lt;figure&gt;</code></strong> element which is its immediate ancestor.</td>
         </tr>
         <tr>
           <td><strong><code>&lt;figure&gt;</code></strong></td>
           <td>The <strong><code>HTML &lt;figure&gt; element</code></strong> represents self-contained content, frequently with a caption(<strong><code>&lt;figcaption&gt;</code></strong>), and is typically referenced as a single unit.</td>
         </tr>
         <tr>
           <td><strong><code>&lt;hr&gt;</code></strong></td>
           <td>The <strong><code>HTML &lt;hr&gt; element</code></strong> represents a thematic break between paragraph-level elements (for example, a change of scene in a story, or a shift of topic with a section). In previous versions of HTML, it represented a horizontal rule. It may still be displayed as a horizontal rule in visual browsers, but is now defined in semantic terms, rather than presentational terms.</td>
         </tr>
         <tr>
           <td><strong><code>&lt;li&gt;</code></strong></td>
           <td>The <strong><code>HTML &lt;li&gt; element</code></strong> is used to represent an item in a list. It must be contained in a parent element: an ordered list (<strong><code>&lt;ol&gt;</code></strong>), an unordered list (<strong><code>&lt;ul&gt;</code></strong>), or menu (<strong><code>&lt;menu&gt;</code></strong>). In menus and unordered lists, list items are usually displayed using bullet points. In ordered lists, they are usually displayed with an ascending counter on the left, such as a number or letter.</td>
         </tr>
         <tr>
           <td><strong><code>&lt;main&gt;</code></strong></td>
           <td>The <strong><code>HTML &lt;main&gt; element</code></strong>  represents the main content of the <strong><code>&lt;body&gt;</code></strong> of a document, portion of a document, or application. The main content area consists of content that is directly related to, or expands upon the central topic of, a document or the central functionality of an application.</td>
         </tr>
         <tr>
           <td><strong><code>&lt;ol&gt;</code></strong></td>
           <td>The <strong><code>HTML &lt;ol&gt; element</code></strong> represents an ordered list of items, typically rendered as a numbered list.</td>
         </tr>
         <tr>
           <td><strong><code>&lt;p&gt;</code></strong></td>
           <td>The <strong><code>HTML &lt;p&gt; element</code></strong> represents a paragraph of text.</td>
         </tr>
        <tr>
            <td><strong><code>&lt;ul&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;ul&gt; element</code></strong> represents unordered list which shows special types of bullets like (circular, disc, squire, etc.)</td>        
        </tr>
    </table>
        <h2 class="w3-black w3-panel" style="height:40px">Inline Text Semantics</h2>
    <p>Use the HTML inline text semantic to define the meaning, structure, or style of a word, line, or any arbitrary piece of text.</p>
    <table id="tab">
        <tr id="head" >
             <th width="100px">Element</th>
             <th>Discription</th>
         </tr>
        <tr>
            <td><strong><code>&lt;a&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;a&gt; element</code></strong> (the anchor tag) is used to make hyper links of other web pages including file, location and any other URL</td>
        </tr>
        <tr>
            <td><strong><code>&lt;abbr&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;abbr&gt; element</code></strong> represents the abbrovation or optionally provide the descruption. For examples the abbtivation (Document) is generally used as doc that means the document represents as doc.</td>   
        </tr>
        <tr>
           <td><strong><code>&lt;b&gt;</code></strong></td> 
            <td>The <strong><code>HTML &lt;b&gt; element</code></strong> represents the any thing (words, link, phase, line) in bolder Form. </td>
        </tr>
        <tr>
            <td><strong><code>&lt;bdi&gt;</code></strong></td> 
            <td>The <strong><code>HTML &lt;bdi&gt; element</code></strong> (bidirection isolation) isolates apna text with different direction from other test outside it.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;bdo&gt;</code></strong></td> 
            <td>The <strong><code>HTML &lt;bdo&gt; element</code></strong> (bidirection override) is use to override the current direction of text.</td>
        </tr>
        <tr>
           <td><strong><code>&lt;br&gt;</code></strong></td>  
            <td>The <strong><code>HTML &lt;br&gt; element</code></strong> is used to make a line break (specially when you are trying to writ a poem and after every line you need line barak) this is very useful element in HTML</td>
        </tr>
        <tr>
            <td><strong><code>&lt;cite&gt;</code></strong></td>  
            <td>The <strong><code>HTML &lt;cite&gt; element</code></strong> represents a reference to a creative work. It must include the title of a work or a URL reference, which may be in an abbreviated form according to the conventions used for the addition of citation metadata.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;code&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;code&gt; element</code></strong> represents the any code in exectly the same as any editor shows with monospace font.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;data&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;data&gt; element</code></strong> links a given content with a machine-readable translation. If the content is time- or date-related, the <code>&lt;time&gt;</code> element must be used.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;dfn&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;dfn&gt; element</code></strong> represents the defining instance of a term.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;em&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;em&gt; element</code></strong> marks text that has stress emphasis. The <code>&lt;em&gt;</code> element can be nested, with each level of nesting indicating a greater degree of emphasis.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;i&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;i&gt; element</code></strong> represents a range of text that is set off from the normal text for some reason, for example, technical terms, foreign language phrases, or fictional character thoughts. It is typically displayed in italic type.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;kbd&gt;</code></strong></td>
            <td>The <strong><code>HTML &lt;kbd&gt; element</code></strong> represents user input and produces an inline element displayed in the browser's default monospace font.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;mark&gt;</code></strong></td>
            <td>The <strong><code>&lt;mark&gt;</code></strong> represents highlighted text, i.e., a run of text marked for reference purpose, due to its relevance in a particular context.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;q&gt;</code></strong></td>
            <td>The <strong><code>&lt;q&gt;</code></strong> indicates that the enclosed text is a short inline quotation. This element is intended for short quotations that don't require paragraph breaks; for long quotations use the <code>&lt;blockquote&gt;</code> element.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;rp&gt;</code></strong></td>
            <td>The <strong><code>&lt;rp&gt;</code></strong> is used to provide fall-back parentheses for browsers that do not support display of ruby annotations using the <code>&lt;ruby&gt;</code> element.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;rt&gt;</code></strong></td>
            <td>The <strong><code>&lt;rt&gt;</code></strong> embraces pronunciation of characters presented in a ruby annotations, which are used to describe the pronunciation of East Asian characters. This element is always used inside a <code>&lt;ruby&gt;</code> element.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;rtc&gt;</code></strong></td>
            <td>The <strong><code>&lt;rtc&gt;</code></strong> embraces semantic annotations of characters presented in a ruby of <code>&lt;rb&gt;</code> elements used inside of <code>&lt;ruby&gt;</code> element. <code>&lt;rb&gt;</code> elements can have both pronunciation (<code>&lt;rt&gt;</code>) and semantic (<code>&lt;rtc&gt;</code>) annotations.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;ruby&gt;</code></strong></td>
            <td>The <strong><code>&lt;ruby&gt;</code></strong>  represents a ruby annotation. Ruby annotations are for showing pronunciation of East Asian characters.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;s&gt;</code></strong></td>
            <td>The <strong><code>&lt;s&gt;</code></strong> renders text with a strikethrough, or a line through it. Use the <code>&lt;s&gt;</code> element to represent things that are no longer relevant or no longer accurate. However, <code>&lt;s&gt;</code> is not appropriate when indicating document edits; for that, use the <code>&lt;del&gt;</code> and <code>&lt;ins&gt;</code> elements, as appropriate.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;samp&gt;</code></strong></td>
            <td>The <strong><code>&lt;samp&gt;</code></strong> element is an element intended to identify sample output from a computer program. It is usually displayed in the browser's default monotype font (such as Lucida Console).</td>
        </tr>
        <tr>
           <td><strong><code>&lt;small&gt;</code></strong></td> 
            <td>The <strong><code>&lt;small&gt;</code></strong> element makes the text font size one size smaller (for example, from large to medium, or from small to x-small) down to the browser's minimum font size.  In HTML5, this element is repurposed to represent side-comments and small print, including copyright and legal text, independent of its styled presentation.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;span&gt;</code></strong></td>
            <td>The <strong><code>&lt;span&gt;</code></strong> element is a generic inline container for phrasing content, which does not inherently represent anything. It can be used to group elements for styling purposes (using the class or id attributes), or because they share attribute values, such as lang.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;strong&gt;</code></strong></td>
            <td>The <strong><code>&lt;strong&gt;</code></strong> element gives text strong importance, and is typically displayed in bold.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;sub&gt;</code></strong></td>
            <td>The <strong><code>&lt;sub&gt;</code></strong> element  defines a span of text that should be displayed, for typographic reasons, lower, and often smaller, than the main span of text.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;sup&gt;</code></strong></td>
            <td>The <strong><code>&lt;sup&gt;</code></strong> element defines a span of text that should be displayed, for typographic reasons, higher, and often smaller, than the main span of text.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;time&gt;</code></strong></td>
            <td>The <strong><code>&lt;time&gt;</code></strong> element represents either a time on a 24-hour clock or a precise date in the Gregorian calendar (with optional time and timezone information).</td>
        </tr>
        <tr>
            <td><strong><code>&lt;u&gt;</code></strong></td>
            <td>The <strong><code>&lt;u&gt;</code></strong> element renders text with an underline, a line under the baseline of its content. In HTML5, this element represents a span of text with an unarticulated, though explicitly rendered, non-textual annotation, such as labeling the text as being a proper name in Chinese text (a Chinese proper name mark), or labeling the text as being misspelled.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;var&gt;</code></strong></td>
            <td>The <strong><code>&lt;var&gt;</code></strong> element represents a variable in a mathematical expression or a programming context.</td>
        </tr>
        <tr>
           <td><strong><code>&lt;wbr&gt;</code></strong></td> 
            <td>The <strong><code>&lt;wbr&gt;</code></strong> element represents a word break opportunity—a position within text where the browser may optionally break a line, though its line-breaking rules would not otherwise create a break at that location.</td>
        </tr>       
    </table>
    <h2 class="w3-black w3-panel" style="height:40px">Image and Multimedia</h2>
    <table id="tab">
        <tr id="head" >
             <th width="100px">Element</th>
             <th>Discription</th>
         </tr>
        <tr>
            <td><strong><code>&lt;area&gt;</code></strong></td>
            <td>The <strong><code>&lt;area&gt;</code></strong> element defines a hot-spot region on an image, and optionally associates it with a hypertext link. This element is used only within a <code>&lt;map&gt;</code> element.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;audio&gt;</code></strong></td>
            <td>The <strong><code>&lt;audio&gt;</code></strong> is used to embed sound content in documents. It may contain one or more audio sources, represented using the src attribute or the <source> element: the browser will choose the most suitable one. It can also be the destination for streamed media, using a MediaStream.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;img&gt;</code></strong></td>
            <td> The <strong><code>&lt;img&gt;</code></strong>  represents an image in the document.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;map&gt;</code></strong></td>
            <td>The <strong><code>&lt;map&gt;</code></strong> element  is used with <code>&lt;area&gt;</code> elements to define an image map (a clickable link area).</td>
        </tr>
        <tr>
            <td><strong><code>&lt;track&gt;</code></strong></td>
            <td>The <strong><code>&lt;track&gt;</code></strong>  is used as a child of the media elements <strong><code>&lt;audio&gt;</code></strong> and <strong><code>&lt;track&gt;</code></strong><strong><code>&lt;video&gt;</code></strong>. It lets you specify timed text tracks (or time-based data).</td>
        </tr>
        <tr>
            <td><strong><code>&lt;video&gt;</code></strong></td>
            <td>The <strong><code>&lt;video&gt;</code></strong> element to embed video content in a document.</td>
        </tr>
    </table>
    <h2 class="w3-black w3-panel" style="height:40px">Embedded Content</h2>
    <p>In addition to regular multimedia content, HTML can include a variety of other content, even if it's not always easy to interact with</p>
    <table id="tab">
        <tr id="head" >
             <th width="100px">Element</th>
             <th>Discription</th>
         </tr>
        <tr>
            <td><strong><code>&lt;embed&gt;</code></strong></td>
            <td>The <strong><code>&lt;embed&gt;</code></strong> element represents an integration point for an external application or interactive content (in other words, a plug-in).</td>
        </tr>
        <tr>
            <td><strong><code>&lt;object&gt;</code></strong></td>
            <td>The <strong><code>&lt;object&gt;</code></strong> element represents an external resource, which can be treated as an image, a nested browsing context, or a resource to be handled by a plugin.</td>
        </tr>
        <tr>
             <td><strong><code>&lt;param&gt;</code></strong></td>
             <td>The <strong><code>&lt;param&gt;</code></strong> element  defines parameters for an <strong><code>&lt;object&gt;</code></strong> element.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;source&gt;</code></strong></td>
            <td>The <strong><code>&lt;source&gt;</code></strong> element specifies multiple media resources for either the <strong><code>&lt;picture&gt;</code></strong>, the <strong><code>&lt;audio&gt;</code></strong> or the <strong><code>&lt;video&gt;</code></strong> element. It is an empty element. It is commonly used to serve the same media content in multiple formats supported by different browsers.</td>
        </tr>
    </table>
    <h2 class="w3-black w3-panel" style="height:40px">Scripting</h2>
    <table id="tab">
        <tr id="head" >
             <th width="100px">Element</th>
             <th>Discription</th>
         </tr>
        <tr>
             <td><strong><code>&lt;canvas&gt;</code></strong></td>
             <td>The <strong><code>&lt;canvas&gt;</code></strong> element is used to draw graphics and animations.</td>
        </tr>
        <tr>
             <td><strong><code>&lt;noscript&gt;</code></strong></td>
             <td>The <strong><code>&lt;noscript&gt;</code></strong> defines a section of HTML to be inserted if a script type on the page is unsupported or if scripting is currently turned off in the browser.</td>
        </tr>
        <tr>
             <td><strong><code>&lt;script&gt;</code></strong></td>
              <td>The <strong><code>&lt;script&gt;</code></strong> element used to embed or reference an executable script.</td>           
        </tr>
    </table>
    <h2 class="w3-black w3-panel" style="height:40px">Table Content</h2>
    <p >The elements here are used to create and handle tabular data.</p>
    <table id="tab">
        <tr id="head" >
             <th width="100px">Element</th>
             <th>Discription</th>
         </tr>
        <tr>
            <td><strong><code>&lt;caption&gt;</code></strong></td>
            <td>The <strong><code>&lt;caption&gt;</code></strong> element represents the title of a table. Though it is always the first decendent of <code>&lt;table&gt;</code>.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;col&gt;</code></strong></td>
            <td>The <strong><code>&lt;col&gt;</code></strong> element defines a column with a table and is used for defining common semantics on all commo cell.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;colgroup&gt;</code></strong></td>
            <td>The <strong><code>&lt;colgroup&gt;</code></strong> element defines a group of column in table.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;table&gt;</code></strong></td>
            <td>The <strong><code>&lt;table&gt;</code></strong> element represents tabular data — that is, information expressed via a two-dimensional data table.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;tbody&gt;</code></strong></td>
            <td>The <strong><code>&lt;tbody&gt;</code></strong> element  groups one or more <code>&lt;tr&gt;</code> elements as the body of a <code>&lt;table&gt;</code> element.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;td&gt;</code></strong></td>
            <td>The <strong><code>&lt;td&gt;</code></strong> element defines a cell of a table that contains data. It participates in the table model.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;tfoot&gt;</code></strong></td>
            <td>The <strong><code>&lt;tfoot&gt;</code></strong> element defines a set of rows summarizing the columns of the table.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;thead&gt;</code></strong></td>
            <td>The <strong><code>&lt;thead&gt;</code></strong> element defines a set of rows defining the head of the columns of the table.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;tr&gt;</code></strong></td>
            <td>The <strong><code>&lt;tr&gt;</code></strong> element defines a row of cells in a table. Those can be a mix of <code>&lt;td&gt;</code> and <code>&lt;th&gt;</code> elements.</td>
        </tr>
    </table>
<div >
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- FooterBanner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:650px;height:200px"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="4521975542"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    <h2 class="w3-black w3-panel" style="height:40px">Forms</h2>
    <p>HTML provides a number of elements which can be used together to create forms which the user can fill out and submit to the Web site or application.</p>
    <table id="tab">
        <tr id="head" >
             <th width="100px">Element</th>
             <th>Discription</th>
         </tr>
        <tr>
            <td><strong><code>&lt;button&gt;</code></strong></td>
            <td>The <strong><code>&lt;button&gt;</code></strong> element represents a clickable button.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;datalist&gt;</code></strong></td>
            <td>The <strong><code>&lt;datalist&gt;</code></strong> element contains a set of <code>&lt;option&gt;</code> elements that represent the values available for other controls.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;fieldset&gt;</code></strong></td>
            <td>The <strong><code>&lt;fieldset&gt;</code></strong> element is used to group several controls as well as labels (<code>&lt;label&gt;</code>) within a web form.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;form&gt;</code></strong></td>
            <td>The <strong><code>&lt;form&gt;</code></strong> element represents a document section that contains interactive controls to submit information to a web server.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;input&gt;</code></strong></td>
            <td>The <strong><code>&lt;input&gt;</code></strong> element is used to create interactive controls for web-based forms in order to accept data from the user.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;label&gt;</code></strong></td>
            <td>The <strong><code>&lt;label&gt;</code></strong> element represents a caption for an item in a user interface.</td>
        </tr>
        <tr> 
            <td><strong><code>&lt;legend&gt;</code></strong></td>
            <td>The <strong><code>&lt;legend&gt;</code></strong> element represents a caption for the content of its parent <code>&lt;fieldset&gt;</code>.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;meter&gt;</code></strong></td>
            <td>The <strong><code>&lt;meter&gt;</code></strong> element represents either a scalar value within a known range or a fractional value</td>
        </tr>
        <tr>
            <td><strong><code>&lt;optgroup&gt;</code></strong></td>
            <td>The <strong><code>&lt;optgroup&gt;</code></strong> element creates a grouping of options within a <code>&lt;select&gt;</code> element.</td>
        </tr>
        <tr>
             <td><strong><code>&lt;option&gt;</code></strong></td>
            <td>The <strong><code>&lt;option&gt;</code></strong> element is used to define an item contained in a <code>&lt;select&gt;</code>, an <code>&lt;optgroup&gt;</code>, or a <code>&lt;datalist&gt;</code> element. As such, <code>&lt;option&gt;</code> can represent menu items in popups and other lists of items in an HTML document.</td>
        </tr>
        <tr>
             <td><strong><code>&lt;output&gt;</code></strong></td>
             <td>The <strong><code>&lt;output&gt;</code></strong> element represents the result of a calculation or user action.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;select&gt;</code></strong></td>
            <td>The <strong><code>&lt;select&gt;</code></strong> element represents a control that provides a menu of options:</td>
        </tr>
        <tr>
            <td><strong><code>&lt;textarea&gt;</code></strong></td>
            <td>The <strong><code>&lt;textarea&gt;</code></strong> element represents a multi-line plain-text editing control.</td>
        </tr>
    </table>
         <h2 class="w3-black w3-panel" style="height:40px">Interactive elements</h2>
        <p>HTML offers a selection of elements which help to create interactive user interface objects</p>
        <table id="tab">
        <tr id="head" >
             <th width="100px">Element</th>
             <th>Discription</th>
         </tr>
            <tr>
                <td><strong><code>&lt;details&gt;</code></strong></td>
                <td>The <strong><code>&lt;details&gt;</code></strong> element is used as a disclosure widget from which the user can retrieve additional information.</td>
            </tr>
            <tr>
                <td><strong><code>&lt;dialog&gt;</code></strong></td>
                <td>The <strong><code>&lt;dialog&gt;</code></strong> element represents a dialog box or other interactive component, such as an inspector or window.</td>
            </tr>
            <tr>
                <td><strong><code>&lt;menu&gt;</code></strong></td>
                <td>The <strong><code>&lt;menu&gt;</code></strong> element represents a group of commands that a user can perform or activate. This includes both list menus, which might appear across the top of a screen, as well as context menus, such as those that might appear underneath a button after it has been clicked.</td>
            </tr>
            <tr>
                 <td><strong><code>&lt;menuitem&gt;</code></strong></td>
                 <td>The<strong><code>&lt;menuitem&gt;</code></strong> element represents a command that a user is able to invoke through a popup menu. This includes context menus, as well as menus that might be attached to a menu button.</td>
            </tr>
            <tr>            
                <td><strong><code>&lt;summary&gt;</code></strong></td>
                <td><strong><code>&lt;summary&gt;</code></strong> element is used as a summary, caption, or legend for the content of a <code>&lt;details&gt;</code> element.</td>
            </tr>
    </table>
     <h2 class="w3-black w3-panel" style="height:40px">Web Components</h2>
    <p>eb Components is an HTML-related technology which makes it possible to, essentially, create and use custom elements as if it were regular HTML. In addition, you can create custom versions of standard HTML elements.</p>
    <table id="tab">
        <tr id="head" >
             <th width="100px">Element</th>
             <th>Discription</th>
         </tr>
        <tr>
            <td><strong><code>&lt;content&gt;</code></strong></td>
            <td>The <strong><code>&lt;content&gt;</code></strong> element an obsolete part of the Web Components suite of technologies—was used inside of Shadow DOM as an insertion point, and wasn't meant to be used in ordinary HTML It has now been replaced by the <code>&lt;slot&gt;</code> element, which creates a point in the DOM at which a shadow DOM can be inserted</td>
        </tr>
        <tr>
            <td><strong><code>&lt;element&gt;</code></strong></td>
            <td><strong><code>&lt;element&gt;</code></strong> element was part of Web Components; this element was intended to be used to define new custom DOM elements. It was removed in favor of a JavaScript-driven methodology for creating new custom elements; however, that technology is not mature and no browers fully implement it.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;shadow&gt;</code></strong></td>
            <td>The <strong><code>&lt;shadow&gt;</code></strong> element an obsolete part of the Web Components technology suite—was intended to be used as a shadow DOM insertion point. You might have used it if you have created multiple shadow roots under a shadow host. It is not useful in ordinary HTML.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;slot&gt;</code></strong></td>
            <td>The <strong><code>&lt;slot&gt;</code></strong> element part of the Web Components technology suite—is a placeholder inside a web component that you can fill with your own markup, which lets you create separate DOM trees and present them together.</td>
        </tr>
        <tr>
            <td><strong><code>&lt;templats&gt;</code></strong></td>
            <td>The <strong><code>&lt;templats&gt;</code></strong> element is a mechanism for holding client-side content that is not to be rendered when a page is loaded but may subsequently be instantiated during runtime using JavaScript.</td>
        </tr>
    </table>
    
   
  <a href="whatisHtml.php" class="w3-btn w3-border">PREVIOUS</a>
  <a href="htmlFormatting.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>

<div class="w3-hide-small w3-hide-medium">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- FooterBanner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:650px;height:200px"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="4521975542"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
		

			
	</div>	
		<div class="w3-quarter" style="border: 1px solid white;"  >
		<?php include '../rightSideBar.php' ?>
			</div>
			
</div>
	
		
	


		

	




<footer style="border: 1px solid white;float: left; width: 100%" ><?php include '../footer.php' ?></footer>
