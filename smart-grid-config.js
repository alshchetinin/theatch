var smartgrid = require('smart-grid');

/* It's principal settings in smart grid project */
var settings = {
   outputStyle: 'sass', /* less || scss || sass || styl */
   columns: 12, /* number of grid columns */
   offset: '20px', /* gutter width px || % || rem */
   mobileFirst: false, /* mobileFirst ? 'min-width' : 'max-width' */
   container: {
      maxWidth: '1920px', /* max-width оn very large screen */
      fields: '40px' /* side fields */
   },
   breakPoints: {
      xl: {
         width: '1640px', /* -> @media (max-width: 1100px) */
      },
      lg: {
         width: '1280px', /* -> @media (max-width: 1100px) */
      },
      md: {
         width: '960px'
      },
      sm: {
         width: '780px',
         fields: '15px' /* set fields only if you want to change container.fields */
      },
      xs: {
         width: '560px'
      },
      xxs: {
         width: '320px',
         fields: '10px'
      }

      /* 
      We can create any quantity of break points.

      some_name: {
          width: 'Npx',
          fields: 'N(px|%|rem)',
          offset: 'N(px|%|rem)'
      }
      */
   }
};

smartgrid('./src/assets/css/helpers', settings);