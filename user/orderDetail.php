<?php
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
?>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Order detail - Lasfunding</title>
      <style type="text/css">
        @-webkit-keyframes spinner {
        }
        @keyframes spinner {
        }
        .or-section:before {
        background-color: #ddd; position: absolute; content: ""; height: 100%; width: 1px; top: 0; left: 50%;
        }
        .or-section:after {
        width: 50px; height: 50px; display: block; background: #f8f8f8; border-radius: 50%; content: "or"; color: #ddd; line-height: 50px; text-transform: uppercase; position: absolute; top: 50%; left: 50%; -webkit-transform: translateX(-50%) translateY(-50%); -ms-transform: translateX(-50%) translateY(-50%); transform: translateX(-50%) translateY(-50%); text-align: center;
        }
        .with-rich-text a:not(.button):active {
        color: #111;
        }
        .product-description a:not(.button):active {
        color: #111;
        }
        body {
        background-color: #efefe9; font-family: -apple-system, ".SFNSDisplay-Regular", "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; padding: 0; margin: 0;
        }
        body .plain-content-container {
        background: #fff; padding: 20px; border-bottom: 1px solid #ddd;
        }
        body .plain-content-container .plain-content {
        max-width: 562px;
        }
        body table {
        border-collapse: separate; border-spacing: 0; width: 100%;
        }
        body img {
        display: block; max-width: 100%;
        }
        body img.top-stripes {
        height: 12px; margin: 0 auto; width: 562px;
        }
        body img.pig {
        vertical-align: top; width: 126px; height: 146px; display: block; margin: 11px 30px 0;
        }
        body img.framed {
        border-radius: 4px; border: 1px solid #ddd; margin: 30px auto; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
        }
        body .title {
        text-align: center;
        }
        body .title h4 {
        color: #252a2e; font-size: 18px; margin: 0; padding: 15px; font-weight: bold; text-align: center; text-transform: none;
        }
        body .title img {
        display: block; margin: 5px auto 0; text-align: center;
        }
        body a {
        color: #36a9ae;
        }
        body a.button {
        background: #36a9ae; border: 1px solid #4a8589; border-radius: 4px; color: #fff !important; display: inline-block; font-size: 16px; font-weight: normal; line-height: 19px; padding: 8px 12px; text-align: center; text-decoration: none; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
        }
        body a.button.wide {
        clear: both; display: block;
        }
        body a.button.big {
        padding: 16px 12px; line-height: 22px;
        }
        body a.gray-button {
        background: #eee; border-radius: 4px; color: #454545 !important; font-size: 13px; font-weight: bold; padding: 7px 10px; text-decoration: none; display: inline-block;
        }
        body a.facebook-button img {
        vertical-align: bottom; display: inline; width: 79px;
        }
        body a.twitter-button {
        margin-right: 15px;
        }
        body a.twitter-button img {
        vertical-align: bottom; display: inline; width: 81px;
        }
        body h3 {
        color: #252a2e; font-weight: bold; margin: 20px 0;
        }
        body h3.update-header {
        margin-top: 0;
        }
        body hr {
        background-color: #eee; border: 0; min-height: 1px; height: 1px; margin: 20px 0;
        }
        body .callout_wrapper {
        border: 1px solid #f5f5f5; border-radius: 5px; border-width: 0 1px 2px; overflow: hidden; position: relative;
        }
        body .callout_wrapper .callout {
        background: #fff; border: 1px solid #ddd; border-radius: 4px; overflow: hidden; position: relative; text-decoration: none;
        }
        body .callout_wrapper .callout img {
        display: block; width: 100%;
        }
        body .callout_wrapper .callout strong {
        color: #444; display: block; font-size: 20px; font-weight: bold; margin: 0 20px 20px; padding-top: 20px; text-decoration: none;
        }
        body .callout_wrapper .product-description {
        margin: 20px;
        }
        body .callout_wrapper .product-description a {
        color: #252a2e; text-decoration: underline; white-space: pre; word-wrap: break-word;
        }
        body .callout_wrapper .product-description blockquote {
        font-family: Georgia, serif; font-style: italic; margin-bottom: 12px;
        }
        body .callout_wrapper .product-description blockquote:last-child {
        margin-bottom: 0;
        }
        body .callout_wrapper .product-description p {
        margin: 0 0 12px;
        }
        body .callout_wrapper .product-description p:last-child {
        margin-bottom: 0;
        }
        body .callout_wrapper .product-description ul {
        list-style: disc;
        }
        body .callout_wrapper .product-description ul li {
        margin-left: 20px;
        }
        body .middle-column {
        width: 562px; padding: 40px 0 0;
        }
        body .content-container {
        width: 562px; padding: 20px 30px;
        }
        body p {
        color: #797874; font-size: 16px; line-height: 27px; margin: 15px 0; word-wrap: break-word;
        }
        body li {
        color: #797874; font-size: 16px; line-height: 27px; margin: 15px 0; word-wrap: break-word;
        }
        body p:last-of-type {
        margin-bottom: 0;
        }
        body li:last-of-type {
        margin-bottom: 0;
        }
        body p strong {
        color: #444;
        }
        body li strong {
        color: #444;
        }
        body p a {
        color: #36a8ae; text-decoration: underline; word-wrap: break-word;
        }
        body li a {
        color: #36a8ae; text-decoration: underline; word-wrap: break-word;
        }
        body p.large {
        font-size: 18px; line-height: 32px;
        }
        body li.large {
        font-size: 18px; line-height: 32px;
        }
        body p.text-center {
        text-align: center;
        }
        body li.text-center {
        text-align: center;
        }
        body p.gift {
        margin-bottom: 5px;
        }
        body li.gift {
        margin-bottom: 5px;
        }
        body p.gift strong {
        color: #444; font-size: 24px; font-weight: normal; margin-right: 10px;
        }
        body li.gift strong {
        color: #444; font-size: 24px; font-weight: normal; margin-right: 10px;
        }
        body p.gift_note {
        background-color: #fafafa; border: 1px solid #eee; border-radius: 4px; margin-bottom: 25px; padding: 15px;
        }
        body li.gift_note {
        background-color: #fafafa; border: 1px solid #eee; border-radius: 4px; margin-bottom: 25px; padding: 15px;
        }
        body p.top {
        margin-top: 15px;
        }
        body li.top {
        margin-top: 15px;
        }
        body p.date {
        font-size: 14px; background: #e76c5e; border: 1px solid #e35c4d; border-radius: 4px; color: #fff; display: inline-block; font-weight: bold !important; line-height: 20px; margin-top: 0; padding: 8px;
        }
        body li.date {
        font-size: 14px; background: #e76c5e; border: 1px solid #e35c4d; border-radius: 4px; color: #fff; display: inline-block; font-weight: bold !important; line-height: 20px; margin-top: 0; padding: 8px;
        }
        body p.info {
        color: #797874; font-size: 16px; line-height: 24px; margin: 0 20px 10px 0;
        }
        body li.info {
        color: #797874; font-size: 16px; line-height: 24px; margin: 0 20px 10px 0;
        }
        body p.money {
        color: #252a2e; font-size: 42px; font-weight: bold !important; line-height: 50px; margin: 26px 0 4px;
        }
        body li.money {
        color: #252a2e; font-size: 42px; font-weight: bold !important; line-height: 50px; margin: 26px 0 4px;
        }
        body .footer {
        margin: 20px 0;
        }
        body .footer.centered {
        text-align: center;
        }
        body .footer p {
        font-size: 14px; padding: 0 15px;
        }
        body .footer a {
        color: #666;
        }
        body .product-name {
        color: #444; margin-right: 10px; font-size: 24px; font-weight: normal;
        }
        body .product-name a {
        color: #444;
        }
        body .product-name small {
        color: #aaa; font-size: 15px;
        }
        body .gray-box {
        background: #fafafa; border: 1px solid #eee; border-radius: 4px; margin-top: 25px;
        }
        body .gray-box h5 {
        color: #777; padding: 0 20px; margin-bottom: 0; font-size: 14px; font-weight: 500;
        }
        body .gray-box h3 {
        color: #777; padding: 0 20px; margin-bottom: 0; font-size: 14px; font-weight: 500;
        }
        body .gray-box p {
        color: #777; font-size: 14px; margin: 20px 0 10px; padding: 0 20px 20px; border-bottom: 1px dotted #eee;
        }
        body .gray-box p.license-key {
        font-family: Courier; margin: 0;
        }
        body .gray-box p:last-of-type {
        padding-bottom: 10px; border-bottom: 0;
        }
        body .gray-box table td {
        border-bottom: 1px dotted #eee; color: #777; padding: 14px 0 12px !important; text-align: left;
        }
        body .gray-box table th {
        border-bottom: 1px dotted #eee; color: #777; padding: 14px 0 12px !important; text-align: left;
        }
        body .gray-box table tdth {
        font-weight: bold;
        }
        body .gray-box table thth {
        font-weight: bold;
        }
        body .gray-box table td:first-child {
        padding: 14px 0 12px 14px !important;
        }
        body .gray-box table th:first-child {
        padding: 14px 0 12px 14px !important;
        }
        body .gray-box .twitter-button {
        display: inline-block; margin-top: 20px;
        }
        body .gray-box .facebook-button {
        display: inline-block; margin-top: 20px;
        }
        body .gray-box .twitter-button img {
        display: inline;
        }
        body .gray-box .facebook-button img {
        display: inline;
        }
        body .default-table tr td {
        color: #797874;
        }
        body .default-table tr td strong {
        color: #444; font-weight: normal;
        }
        body .default-table tr td.right {
        text-align: right;
        }
        body .default-table .logo {
        display: inline-block; margin-right: 5px; vertical-align: text-top;
        }
        body .tax-table tr td {
        padding-bottom: 10px;
        }
        body .tax-table tr:last-child td {
        padding-bottom: 0;
        }
        body .deposit-table {
        text-align: left; font-size: 16px;
        }
        body .deposit-table th {
        color: #252a2e;
        }
        body .deposit-table tr th {
        padding: 10px 0 !important;
        }
        body .deposit-table tr td {
        padding: 10px 0 !important;
        }
        body .deposit-table tr th:nth-child(2) {
        text-align: right;
        }
        body .deposit-table tr td:nth-child(2) {
        text-align: right;
        }
        body .deposit-table tr th a {
        color: #797874; text-decoration: none;
        }
        body .deposit-table tr th span {
        color: #797874; text-decoration: none;
        }
        body .deposit-table tr td a {
        color: #797874; text-decoration: none;
        }
        body .deposit-table tr td span {
        color: #797874; text-decoration: none;
        }
        body .last-week-header {
        text-align: center; padding-top: 10px; padding-bottom: 30px; border-bottom: 1px solid #f5f5f5; margin-bottom: 20px;
        }
        body .last-week-header td {
        width: 50%; font-weight: bold;
        }
        body .last-week-header td:first-child {
        border-right: 1px solid #f5f5f5;
        }
        body .last-week-header strong {
        font-size: 36px; display: block; margin: 16px 0 4px;
        }
        body .last-week-table tr td {
        padding: 10px 0 !important; font-size: 17px; color: #797874;
        }
        body .last-week-table tr td a {
        color: #36a9ae; text-decoration: underline;
        }
        body .last-week-table tr td p {
        margin: 0;
        }
        body .last-week-table tr td.left {
        text-align: left;
        }
        body .last-week-table tr td.right {
        text-align: right;
        }
        body .signoff {
        overflow: hidden;
        }
        body .signoff .tagline {
        float: left; margin: 25px 0 0 10px;
        }
        body .signoff .tagline h4 {
        color: #666; font-size: 16px; font-weight: bold; margin: 0;
        }
        body .signoff .tagline p {
        color: #797874; font-family: Georgia, serif; font-size: 14px; font-style: italic; margin: 0;
        }
        body .signoff img {
        float: left; height: 64px; margin: 14px 12px 0 0; width: 64px;
        }
        body .update-cover-image {
        border: 1px solid #ddd; border-radius: 4px; width: 100%;
        }
        @-webkit-keyframes spinner {
        }
        @keyframes spinner {
        }
        .or-section:before {
        background-color: #ddd; position: absolute; content: ""; height: 100%; width: 1px; top: 0; left: 50%;
        }
        .or-section:after {
        width: 50px; height: 50px; display: block; background: #f8f8f8; border-radius: 50%; content: "or"; color: #ddd; line-height: 50px; text-transform: uppercase; position: absolute; top: 50%; left: 50%; -webkit-transform: translateX(-50%) translateY(-50%); -ms-transform: translateX(-50%) translateY(-50%); transform: translateX(-50%) translateY(-50%); text-align: center;
        }
        .with-rich-text a:not(.button):active {
        color: #111;
        }
        .product-description a:not(.button):active {
        color: #111;
        }
        body {
        background-color: #efefe9; font-family: -apple-system, ".SFNSDisplay-Regular", "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; padding: 0; margin: 0;
        }
        body .plain-content-container {
        background: #fff; padding: 20px; border-bottom: 1px solid #ddd;
        }
        body .plain-content-container .plain-content {
        max-width: 562px;
        }
        body table {
        border-collapse: separate; border-spacing: 0; width: 100%;
        }
        body img {
        display: block; max-width: 100%;
        }
        body img.top-stripes {
        height: 12px; margin: 0 auto; width: 562px;
        }
        body img.pig {
        vertical-align: top; width: 126px; height: 146px; display: block; margin: 11px 30px 0;
        }
        body img.framed {
        border-radius: 4px; border: 1px solid #ddd; margin: 30px auto; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
        }
        body .title {
        text-align: center;
        }
        body .title h4 {
        color: #252a2e; font-size: 18px; margin: 0; padding: 15px; font-weight: bold; text-align: center; text-transform: none;
        }
        body .title img {
        display: block; margin: 5px auto 0; text-align: center;
        }
        body a {
        color: #36a9ae;
        }
        body a.button {
        background: #36a9ae; border: 1px solid #4a8589; border-radius: 4px; color: #fff !important; display: inline-block; font-size: 16px; font-weight: normal; line-height: 19px; padding: 8px 12px; text-align: center; text-decoration: none; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
        }
        body a.button.wide {
        clear: both; display: block;
        }
        body a.button.big {
        padding: 16px 12px; line-height: 22px;
        }
        body a.gray-button {
        background: #eee; border-radius: 4px; color: #454545 !important; font-size: 13px; font-weight: bold; padding: 7px 10px; text-decoration: none; display: inline-block;
        }
        body a.facebook-button img {
        vertical-align: bottom; display: inline; width: 79px;
        }
        body a.twitter-button {
        margin-right: 15px;
        }
        body a.twitter-button img {
        vertical-align: bottom; display: inline; width: 81px;
        }
        body h3 {
        color: #252a2e; font-weight: bold; margin: 20px 0;
        }
        body h3.update-header {
        margin-top: 0;
        }
        body hr {
        background-color: #eee; border: 0; min-height: 1px; height: 1px; margin: 20px 0;
        }
        body .callout_wrapper {
        border: 1px solid #f5f5f5; border-radius: 5px; border-width: 0 1px 2px; overflow: hidden; position: relative;
        }
        body .callout_wrapper .callout {
        background: #fff; border: 1px solid #ddd; border-radius: 4px; overflow: hidden; position: relative; text-decoration: none;
        }
        body .callout_wrapper .callout img {
        display: block; width: 100%;
        }
        body .callout_wrapper .callout strong {
        color: #444; display: block; font-size: 20px; font-weight: bold; margin: 0 20px 20px; padding-top: 20px; text-decoration: none;
        }
        body .callout_wrapper .product-description {
        margin: 20px;
        }
        body .callout_wrapper .product-description a {
        color: #252a2e; text-decoration: underline; white-space: pre; word-wrap: break-word;
        }
        body .callout_wrapper .product-description blockquote {
        font-family: Georgia, serif; font-style: italic; margin-bottom: 12px;
        }
        body .callout_wrapper .product-description blockquote:last-child {
        margin-bottom: 0;
        }
        body .callout_wrapper .product-description p {
        margin: 0 0 12px;
        }
        body .callout_wrapper .product-description p:last-child {
        margin-bottom: 0;
        }
        body .callout_wrapper .product-description ul {
        list-style: disc;
        }
        body .callout_wrapper .product-description ul li {
        margin-left: 20px;
        }
        body .middle-column {
        width: 562px; padding: 40px 0 0;
        }
        body .content-container {
        width: 562px; padding: 20px 30px;
        }
        body p {
        color: #797874; font-size: 16px; line-height: 27px; margin: 15px 0; word-wrap: break-word;
        }
        body li {
        color: #797874; font-size: 16px; line-height: 27px; margin: 15px 0; word-wrap: break-word;
        }
        body p:last-of-type {
        margin-bottom: 0;
        }
        body li:last-of-type {
        margin-bottom: 0;
        }
        body p strong {
        color: #444;
        }
        body li strong {
        color: #444;
        }
        body p a {
        color: #36a8ae; text-decoration: underline; word-wrap: break-word;
        }
        body li a {
        color: #36a8ae; text-decoration: underline; word-wrap: break-word;
        }
        body p.large {
        font-size: 18px; line-height: 32px;
        }
        body li.large {
        font-size: 18px; line-height: 32px;
        }
        body p.text-center {
        text-align: center;
        }
        body li.text-center {
        text-align: center;
        }
        body p.gift {
        margin-bottom: 5px;
        }
        body li.gift {
        margin-bottom: 5px;
        }
        body p.gift strong {
        color: #444; font-size: 24px; font-weight: normal; margin-right: 10px;
        }
        body li.gift strong {
        color: #444; font-size: 24px; font-weight: normal; margin-right: 10px;
        }
        body p.gift_note {
        background-color: #fafafa; border: 1px solid #eee; border-radius: 4px; margin-bottom: 25px; padding: 15px;
        }
        body li.gift_note {
        background-color: #fafafa; border: 1px solid #eee; border-radius: 4px; margin-bottom: 25px; padding: 15px;
        }
        body p.top {
        margin-top: 15px;
        }
        body li.top {
        margin-top: 15px;
        }
        body p.date {
        font-size: 14px; background: #e76c5e; border: 1px solid #e35c4d; border-radius: 4px; color: #fff; display: inline-block; font-weight: bold !important; line-height: 20px; margin-top: 0; padding: 8px;
        }
        body li.date {
        font-size: 14px; background: #e76c5e; border: 1px solid #e35c4d; border-radius: 4px; color: #fff; display: inline-block; font-weight: bold !important; line-height: 20px; margin-top: 0; padding: 8px;
        }
        body p.info {
        color: #797874; font-size: 16px; line-height: 24px; margin: 0 20px 10px 0;
        }
        body li.info {
        color: #797874; font-size: 16px; line-height: 24px; margin: 0 20px 10px 0;
        }
        body p.money {
        color: #252a2e; font-size: 42px; font-weight: bold !important; line-height: 50px; margin: 26px 0 4px;
        }
        body li.money {
        color: #252a2e; font-size: 42px; font-weight: bold !important; line-height: 50px; margin: 26px 0 4px;
        }
        body .footer {
        margin: 20px 0;
        }
        body .footer.centered {
        text-align: center;
        }
        body .footer p {
        font-size: 14px; padding: 0 15px;
        }
        body .footer a {
        color: #666;
        }
        body .product-name {
        color: #444; margin-right: 10px; font-size: 24px; font-weight: normal;
        }
        body .product-name a {
        color: #444;
        }
        body .product-name small {
        color: #aaa; font-size: 15px;
        }
        body .gray-box {
        background: #fafafa; border: 1px solid #eee; border-radius: 4px; margin-top: 25px;
        }
        body .gray-box h5 {
        color: #777; padding: 0 20px; margin-bottom: 0; font-size: 14px; font-weight: 500;
        }
        body .gray-box h3 {
        color: #777; padding: 0 20px; margin-bottom: 0; font-size: 14px; font-weight: 500;
        }
        body .gray-box p {
        color: #777; font-size: 14px; margin: 20px 0 10px; padding: 0 20px 20px; border-bottom: 1px dotted #eee;
        }
        body .gray-box p.license-key {
        font-family: Courier; margin: 0;
        }
        body .gray-box p:last-of-type {
        padding-bottom: 10px; border-bottom: 0;
        }
        body .gray-box table td {
        border-bottom: 1px dotted #eee; color: #777; padding: 14px 0 12px !important; text-align: left;
        }
        body .gray-box table th {
        border-bottom: 1px dotted #eee; color: #777; padding: 14px 0 12px !important; text-align: left;
        }
        body .gray-box table tdth {
        font-weight: bold;
        }
        body .gray-box table thth {
        font-weight: bold;
        }
        body .gray-box table td:first-child {
        padding: 14px 0 12px 14px !important;
        }
        body .gray-box table th:first-child {
        padding: 14px 0 12px 14px !important;
        }
        body .gray-box .twitter-button {
        display: inline-block; margin-top: 20px;
        }
        body .gray-box .facebook-button {
        display: inline-block; margin-top: 20px;
        }
        body .gray-box .twitter-button img {
        display: inline;
        }
        body .gray-box .facebook-button img {
        display: inline;
        }
        body .default-table tr td {
        color: #797874;
        }
        body .default-table tr td strong {
        color: #444; font-weight: normal;
        }
        body .default-table tr td.right {
        text-align: right;
        }
        body .default-table .logo {
        display: inline-block; margin-right: 5px; vertical-align: text-top;
        }
        body .tax-table tr td {
        padding-bottom: 10px;
        }
        body .tax-table tr:last-child td {
        padding-bottom: 0;
        }
        body .deposit-table {
        text-align: left; font-size: 16px;
        }
        body .deposit-table th {
        color: #252a2e;
        }
        body .deposit-table tr th {
        padding: 10px 0 !important;
        }
        body .deposit-table tr td {
        padding: 10px 0 !important;
        }
        body .deposit-table tr th:nth-child(2) {
        text-align: right;
        }
        body .deposit-table tr td:nth-child(2) {
        text-align: right;
        }
        body .deposit-table tr th a {
        color: #797874; text-decoration: none;
        }
        body .deposit-table tr th span {
        color: #797874; text-decoration: none;
        }
        body .deposit-table tr td a {
        color: #797874; text-decoration: none;
        }
        body .deposit-table tr td span {
        color: #797874; text-decoration: none;
        }
        body .last-week-header {
        text-align: center; padding-top: 10px; padding-bottom: 30px; border-bottom: 1px solid #f5f5f5; margin-bottom: 20px;
        }
        body .last-week-header td {
        width: 50%; font-weight: bold;
        }
        body .last-week-header td:first-child {
        border-right: 1px solid #f5f5f5;
        }
        body .last-week-header strong {
        font-size: 36px; display: block; margin: 16px 0 4px;
        }
        body .last-week-table tr td {
        padding: 10px 0 !important; font-size: 17px; color: #797874;
        }
        body .last-week-table tr td a {
        color: #36a9ae; text-decoration: underline;
        }
        body .last-week-table tr td p {
        margin: 0;
        }
        body .last-week-table tr td.left {
        text-align: left;
        }
        body .last-week-table tr td.right {
        text-align: right;
        }
        body .signoff {
        overflow: hidden;
        }
        body .signoff .tagline {
        float: left; margin: 25px 0 0 10px;
        }
        body .signoff .tagline h4 {
        color: #666; font-size: 16px; font-weight: bold; margin: 0;
        }
        body .signoff .tagline p {
        color: #797874; font-family: Georgia, serif; font-size: 14px; font-style: italic; margin: 0;
        }
        body .signoff img {
        float: left; height: 64px; margin: 14px 12px 0 0; width: 64px;
        }
        body .update-cover-image {
        border: 1px solid #ddd; border-radius: 4px; width: 100%;
        }
        @media only screen and (max-width: 570px) {
        td#leftcolumn {
        width: 0 !important; height: 0 !important; display: none !important;
        }
        td#rightcolumn {
        width: 0 !important; height: 0 !important; display: none !important;
        }
        .top-stripes {
        font-size: 0 !important; line-height: 0 !important; max-height: 0 !important; mso-hide: all !important; width: 0 !important; overflow: hidden !important;
        }
        .bottom {
        font-size: 0 !important; line-height: 0 !important; max-height: 0 !important; mso-hide: all !important; width: 0 !important; overflow: hidden !important;
        }
        .top-stripes-mobile {
        height: 3px !important; max-height: 3px !important; mso-hide: none !important; width: 100% !important;
        }
        .bottom-mobile {
        height: 17px !important; max-height: 17px !important; mso-hide: none !important; width: 100% !important;
        }
        .middle-column {
        width: 100% !important; padding: 0 !important;
        }
        .content-container {
        width: 100% !important; background: white !important; padding: 15px !important; border-bottom: 1px solid #ddd !important;
        }
        .content-container.receipt {
        border-bottom: 0 !important;
        }
        span.pigholder {
        margin: 0 auto !important; display: block !important; width: 150px !important;
        }
        img.pig {
        float: none !important; margin: 0 !important;
        }
        hr {
        margin: 15px 0 !important;
        }
        .mobilecenter {
        text-align: center !important; display: block !important;
        }
        .email-recommendations .email-recommendations__header {
        font-size: 13px !important; font-weight: 500 !important;
        }
        .email-recommendations .email-recommendations__subheader {
        font-size: 11px !important;
        }
        .email-recommendations .email-recommendations__product {
        width: 100% !important; display: block !important;
        }
        .email-recommendations .email-recommendations__spacer {
        display: none !important;
        }
        }
     </style>
     <style>
        .mini-loader-container {
            display: none;
            align-items: center;
            flex-direction: column;
          }
          
          .mini-loader {
            width: 60px;
            /** height: 2256px; **/
            stroke-width: 5px;
            stroke: #fff;
            fill: transparent;
            stroke-dasharray: 157.1;
            stroke-dashoffset: 0;
            animation: rot 4s infinite linear, clr 9s infinite linear;
          }
          
          @keyframes rot {
            0% {
              transform: rotate(0deg);
              stroke-dashoffset: 157.1;
            }
            50% {
              stroke-dashoffset: 0;
            }
            100% {
              transform: rotate(360deg);
              stroke-dashoffset: -157.1;
            }
          }
          
          @keyframes clr {
              0%,
              100% {
                stroke: #F5C1A9;
              }
              20% {
                stroke: #E04800;
              }
              40% {
                stroke: #E04800;
              }
              
              60% {
                stroke: #F5C1A9;
              }
              80% {
                stroke: #F5C1A9;
              }
            }  
     </style>
     <style>
        div#proof {
            float: left;
            margin-left: -40px;
            margin-bottom: 22px;
        }

        @media (max-width: 900px) {
            div#proof {
                float: left;
                margin-left: -59px;
                margin-bottom: 22px;
            }
        }
     </style>
     
     <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/lasfunding.webflow.css" rel="stylesheet" type="text/css">
   </head>
   <body>
          
      <table style="border-collapse: separate; border-spacing: 0; width: 100%">
         <tr>
            <td id="leftcolumn"></td>
            <td class="middle-column" style="padding: 40px 0 0; width: 562px">
               <img class="top-stripes" src="https://static-1.gumroad.com/res/gumroad/assets/email/email_body_top-b0ae0208dbe8c73566ef2da5fd7a76af.png"
                  style="display: block; height: 12px; margin: 0 auto; max-width: 100%; width: 562px">
                  
       

               <table style="border-collapse: separate; border-spacing: 0; width: 100%">
                  <tr>
                     <td class="content-container" style="background: url(https://static-1.gumroad.com/res/gumroad/assets/email/email_body_middle-d6eb6cdbc0581e921c733be0d6ce8a1b.png); padding: 20px 30px; width: 562px">
                        <div class="title" style="text-align: center" align="center">
                           <img alt="Gumroad" id="logo" src="https://lasfunding.com/images/Lasfund-Logo.svg"
                              style="display: block; margin: 5px auto 0; max-width: 100%; text-align: center">
                <div class="mini-loader-container">
                    <svg id="mini-loader" class="mini-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <g>
                            <ellipse id="ellipse" cx="50" cy="50" rx="25" ry="25" />
                        </g>        
                    </svg>        
                </div> 
                        
                        <h4 style="color: #252a2e; font-weight: bold; margin: 10px 0">
                            Order receipt: <span id="orderId">13hdn1-113c-13cv</span>
                        </h4>
                        <hr style="background: #eee; border: 0; height: 1px; margin: 20px 0; min-height: 1px">
                        <span> <a href="./orders.php"> < Back </a> </span>
                        </div>
                        <span class="pigholder">
                        <p  class="mobilecenter money" style="color: #252a2e; font-size: 42px; font-weight: bold !important; line-height: 50px; margin: 26px 0 4px; word-wrap: break-word">
                            $ <span id="accountType"></span>
                        </p>
                        <div id="proof">

                        </div>
                        <!-- <img align="left" alt="proof" class="proof" src="https://public.bnbstatic.com/image/cms/article/body/202302/d385e707ca7bf0292741880243ee26ff.jpeg" 
                        style="display: block; height: 246px; margin: 11px 30px 0; max-width: 100%; vertical-align: top; width: 226px"> -->
                        </span>
                        
                        <p id="paymentMethod" class="mobilecenter" style="color: #797874; font-size: 16px; line-height: 27px; margin: 15px 0; word-wrap: break-word">
                            payment-method
                        </p>
                        <p id="fee" class="mobilecenter" style="color: #797874; font-size: 16px; line-height: 27px; margin: 15px 0; word-wrap: break-word">
                            fee
                        </p>
                        <p id="status" class="mobilecenter" style="color: #797874; font-size: 16px; line-height: 27px; margin: 15px 0; word-wrap: break-word">
                            status
                        </p>                      
                        
                        <p class="mobilecenter" style="color: #797874; font-size: 16px; line-height: 27px; margin: 15px 0; word-wrap: break-word">                           
                                
                              <input type="file" name="uploadProof" id="paymentProofHandler" class="button center" href="https://gumroad.com/#login/xxxx"  accept=".png, .jpg, .jpeg, .pdf"
                              style="background: #36a9ae;/* border-radius: 4px; */border: 1px solid #4a8589;color: #fff !important;display: block;font-size: 16px;font-weight: normal;line-height: 19px;/* padding: 8px 12px; */text-align: center;text-decoration: none;text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);word-wrap: break-word;">
                              <small>upload payment proof</small>
                              
                        </p>
                        <hr style="background: #eee; border: 0; height: 1px; margin: 20px 0; min-height: 1px">
                        <p style="color: #797874; font-size: 16px; line-height: 27px; margin: 15px 0; word-wrap: break-word">Your email address is
                           <a href="#" id="email"
                              style="color: #36a8ae; text-decoration: underline; word-wrap: break-word">email</a>.
                        </p>
                        <p  class="mobilecenter" style="color: #797874; font-size: 16px; line-height: 27px; margin: 15px 0; word-wrap: break-word">
                           <span> <strong>Payment Details</strong> </span> 
                           <div id="paymentDetail"></div>
                        </p>
                        <hr style="background: #eee; border: 0; height: 1px; margin: 20px 0; min-height: 1px">
                        <span style="color: #797874; font-size: 10px; line-height: 20px; margin: 10px 0 0; word-wrap: break-word">Best,
                           <br>The Lasfunding Team.
                        </span>
                     </td>
                  </tr>
               </table>
               <img class="bottom" src="https://static-1.gumroad.com/res/gumroad/assets/email/email_body_bottom-5e00f0bc86cf2512520f0e2bf8a9c237.png"
                  style="display: block; max-width: 100%">
            </td>
            <td id="rightcolumn"></td>
         </tr>
      </table>
      <div class="centered footer" style="margin: 20px 0; text-align: center" align="center">
         <p style="color: #797874; font-size: 14px; line-height: 27px; margin: 15px 0; padding: 0 15px; word-wrap: break-word">
            <a href="#" style="color: #666; text-decoration: underline; word-wrap: break-word">Lasfunding</a>, Submit a ticket with this receipt
            <a href="#"
               style="color: #666; text-decoration: underline; word-wrap: break-word">Here</a>
         </p>
         <p style="color: #797874; font-size: 14px; line-height: 27px; margin: 15px 0 0; padding: 0 15px; word-wrap: break-word"></p>
      </div>
      <img src="http://email.gumroad.com/wf/open?upn=eR781BFQACH6LPrs5ZZlJcBglOztUzxvrZoHw2hMLO-2BvimZAUakByBRqshPfSMxmio8O1K2slzbGotr6MvK99rN4nD2f2uGqVbgHa-2Bzs7GtsQCta2utcqi3Yz41cyVBoSwvafphDH3fxH4PBIufTzlLyHOabek8CiWXIJeA4ReYUTTfjWUQ1BfAEFY4E4abqLtgyQUEqeyI3YS4iguyyj0Kl6o0iykYy6ylzLVEZYvWU2-2FhaIyWhRTi-2B0sv1tVFwiHaZY1xhtIP8Ibkj2JlcwBL6IHQnQ41vZl7JdehNn0lfqa2-2BrtArAwIIgxCSYKRmzr-2FhWDr-2FvxRPAMjaDqanUZVpl-2B67rj6nP5xnegjjr06xb7PMZxoH4q6ffIwvHOZJo66JhrKst8CVS7EP-2BINBQ1NC22uWGX0jQEPzzgBdFws-3D"
         alt="" width="1" height="1" border="0" style="height:1px !important;width:1px !important;border-width:0 !important;margin-top:0 !important;margin-bottom:0 !important;margin-right:0 !important;margin-left:0 !important;padding-top:0 !important;padding-bottom:0 !important;padding-right:0 !important;padding-left:0 !important;"/>
      
  <script src="../backend/user/getUserDetails.js"></script>    
  <script src="../backend/config/_service-worker.js"></script>
  <script src="../backend/user/logOut.js"></script>

  <script src="../backend/user/getUserOrders.js"></script>

  <script>
    async function fetchUserData() {
        try {
        const userDetailsObj = await userDetails(accessToken, baseUrl);
        console.log("userDetailsObj", userDetailsObj);      
        const emailElement = document.querySelector('#email');
        emailElement.textContent = userDetailsObj.email 
            } catch (error) {      
            console.error("An error occurred:", error);
            }
        }

    async function fetchUserOrderDetail() {
        setElementDisplayByClassName('mini-loader-container', 'flex');

        // Get the current URL
        const url = new URL(window.location.href);
        // Get the value of the 'orderId' query parameter
        const orderId = url.searchParams.get('orderId');
        try {
        const userOderDetail = await userOrderDetail(accessToken, orderId);
        console.log("userOderDetail", userOderDetail);     

        const orderIdElement = document.querySelector('#orderId');
        const accountTypeElement = document.querySelector('#accountType');
        const paymentMethodElement = document.querySelector('#paymentMethod');
        const feeElement = document.querySelector('#fee');
        const statusElement = document.querySelector('#status');
        const paymentDetailElement = document.querySelector('#paymentDetail');
        
        
        // Check if the orderDetail object exists and has the necessary properties
        if (userOderDetail) {
            // Set the values of the HTML elements
            const paymentDetailsObject = userOderDetail.transaction.payment_details;
            orderIdElement.textContent = userOderDetail.id 
            accountTypeElement.textContent = userOderDetail.account_type.amount 
            paymentMethodElement.textContent = userOderDetail.payment_method.name 
            feeElement.textContent = `$${userOderDetail.account_type.setup_fee}`
            statusElement.textContent = userOderDetail.status            
            
            const keysToDisplay = ["card_type", "card_last_4_digits", "bank_last_4_digits", "crypto_gateway"];
            // Iterate through the object and create HTML elements
            for (const key of keysToDisplay) {
                if (paymentDetailsObject.hasOwnProperty(key)) {
                  const item = paymentDetailsObject[key];
                  const spanElement = document.createElement("p");
                  spanElement.innerHTML = `${key}: ${JSON.stringify(item)}`;
                  paymentDetailElement.appendChild(spanElement);
                }
              }

            PaymentProofBase64Converter(userOderDetail.transaction.payment_details.payment_proof)
            paymentProofUpload()
            setElementDisplayByClassName('mini-loader-container', 'none');            

        } else {
            // Handle the case where orderDetail is not available or incomplete
            // You can set default values or display an error message
            orderIdElement.textContent = 'N/A';
            accountTypeElement.textContent = 'N/A';
            paymentMethodElement.textContent = 'N/A';
            feeElement.textContent = 'N/A';
            statusElement.textContent = 'N/A';
            paymentDetailElement.textContent = 'N/A';
            emailElement.textContent = 'N/A';
        }
        } catch (error) {      
        console.error("An error occurred:", error);
        }
    }

    

    async function paymentProofUpload() {
        setElementDisplayByClassName('mini-loader-container', 'flex');
        const fileInput = document.querySelector('#paymentProofHandler');
      
        fileInput.addEventListener('change', async () => {
          const files = fileInput.files;
          if (files.length > 0) {
            console.log("files", files[0]);
            const selectedFile = event.target.files[0];
            if (selectedFile) {
              const allowedExtensions = ['.png', '.jpg', '.jpeg', '.pdf'];
              const fileExtension = selectedFile.name.split('.').pop().toLowerCase();
              if (!allowedExtensions.includes(`.${fileExtension}`)) {
                alert('Invalid file type. Please select a .docx, .png, .jpg, .jpeg, or .pdf file.');
                fileInput.value = ''; // Clear the input field
              } else {
                try {
                  let url = new URL(window.location.href);
                  let orderId = url.searchParams.get('orderId');
                  const orderPaymentProof = await updateUserOrderPaymentProof(accessToken, orderId, files[0]);
                  console.log("orderPaymentProof", orderPaymentProof);
                  PaymentProofBase64Converter(orderPaymentProof.transaction.payment_details.payment_proof);
                  setElementDisplayByClassName('mini-loader-container', 'none');
                } catch (error) {
                  console.error("Error:", error);
                  // Handle errors here
                }
              }
            }
          } else {
            console.log("else files", files);
          }
        });
    }
      


    fetchUserData();
    fetchUserOrderDetail();
    
  
    
    function setElementDisplayByClassName(className, state) {
        const elements = document.getElementsByClassName(className);              
        for (const element of elements) {
          element.style.display = state;
        }
      }


    function formatDate(dateString) {
    const createdAt = new Date(dateString);
    const formattedDate = createdAt.toLocaleDateString('en-US', {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit'
    });
    return formattedDate;
    }

    
    function PaymentProofBase64Converter(paymentProofBase64){

        console.log(paymentProofBase64)
        var proofElement = document.getElementById("proof");
            fileContentString = paymentProofBase64
            // Create an image or PDF element based on the data
            if (fileContentString.startsWith("data:image")) {
                // It's an image
                var image = new Image();
                image.src = fileContentString;
                image.style.display = "block";
                image.style.height = "246px";
                image.style.margin = "11px 30px 0";
                image.style.maxWidth = "100%";
                image.style.verticalAlign = "top";
                image.style.width = "226px";
                proofElement.innerHTML = '';
                proofElement.appendChild(image);
            } else if (fileContentString.startsWith("data:application/pdf")) {
                // It's a PDF
                var pdfEmbed = document.createElement("embed");
                pdfEmbed.src = fileContentString;
                pdfEmbed.type = "application/pdf";
                pdfEmbed.width = "100%";
                pdfEmbed.height = "500px"; // Set the desired height for the PDF viewer
                proofElement.innerHTML = '';
                proofElement.appendChild(pdfEmbed);
            } else {
                // Handle other file types or show an error message
                proofElement.innerHTML = "Unsupported file type.";
            }


    }

  </script>

         
   </body>
</html>