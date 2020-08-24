# Planetary Praxis kirby theme

This repo is a kirby theme for Planetary Praxis websites.

## Installing a new website from the PP theme

- Download this repository 

- Install it on a server with FTP

- To configure it, go to http://yoursiteaddress.com/panel

- Fill the form to create a new account and to install the website 

- The panel (website administration interface) should appear


## Add content and create pages

### The templates

→ **Article** template is the basic and default template for article, contact page or about page

→ **Home** template is the template used for the home page, you should not use it for another page 

→ **People** template can be use if you want a people page

→ Use the **Person** template in the people page (**People** page should have children with **Person** template)

→ **Projects** template can be use if you want to have a gallery of projects page

→ Use the **Project** template in the projects page (**Projects** page should have children with **Project** template)

### Writing content with Markdown
#### Bold: 
```
**The quick brown fox jumps over the lazy dog**
```

#### Email addresses: 
```
[Send me an email](mailto:support@getkirby.com)
```

#### Headlines: 
```
# Headline 1
Lorem ipsum dolor sit amet, consectetuer adipiscing elit.

## Headline 2
Lorem ipsum dolor sit amet, consectetuer adipiscing elit.

### Headline 3
Lorem ipsum dolor sit amet, consectetuer adipiscing elit.

#### Headline 4
Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
```

#### Horizontal rules:
```
****
```

#### Italic text:
```
*The quick brown fox jumps over the lazy dog*
```

#### Links: 
```
[Wikipedia](http://wikipedia.org)
```
or
```
(link: http://wikipedia.org text: Wikipedia)
```
for more options: https://getkirby.com/docs/reference/text/kirbytags/link

#### Lists: 
```
- Homer
- Marge
- Bart
- Lisa
- Maggie
```

#### Quotes: 
```
> Markdown is easy and funny !
```

#### Videos (Youtube or Vimeo):
```
(video: http://www.youtube.com/watch?v=lLuc6rtWkrM)
(video: http://vimeo.com/3432886)
```


### Adding image or file

#### Preparing your image:
Your images must be light.   
You should optimize them before sending them to your website.  
The easy way to optimize correctly your image is to use an online compressor, like: https://imagecompressor.com/

#### Adding image or file in text field:
```
(image: myawesomepicture.jpg)
(file: companysecrets.pdf text: Download our company secrets)
```

You can also click on the clipboard icon in the textarea header to upload or select an image or a file.

For more option:  
Image: https://getkirby.com/docs/reference/text/kirbytags/image  
File: https://getkirby.com/docs/reference/text/kirbytags/file


