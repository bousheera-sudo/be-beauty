import { render, screen } from '@testing-library/react';
import App from './App';

test('renders Be-Beauty header', () => {
  render(<App />);
  const headerElement = screen.getByText(/Be-Beauty API Client/i);
  expect(headerElement).toBeInTheDocument();
});
